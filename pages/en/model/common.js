var data_start_time = 32*365.25*24*3600;
view.start = data_start_time;
view.end = data_start_time + 10*24*365*3600;
view.calc_interval(1200);

// -------------------------------------------------------------------
// Load dataset as zip and decompress  - provides faster loading times
// ------------------------------------------------------------------- 
tenyearsdatalines = []

JSZipUtils.getBinaryContent(path+"pages/en/model/tenyearsdata.csv.zip", function(err, data) {
    if(err) throw err;

    JSZip.loadAsync(data).then(function (zip) {
        zip.file("tenyearsdata.csv").async("string")
        .then(function (capacityfactorfile) {
            tenyearsdatalines = capacityfactorfile.split(/\r\n|\n/);
            hours = 87648;

            model_init();
            model_run();
            model_view();
        });
    });
});

// -------------------------------------------------------------------
// Graph navigation
// ------------------------------------------------------------------- 
$("body").bind("plotselected","#placeholder", function (event, ranges) {
    view.start = ranges.xaxis.from*0.001;
    view.end = ranges.xaxis.to*0.001;
    view.calc_interval(1200);
    model_view();
});

$("body").on("click","#pan-left",function(){ view.pan_left(); model_view(); });
$("body").on("click","#pan-right",function(){ view.pan_right(); model_view(); });
$("body").on("click","#zoom-out",function(){ view.zoom_out(); model_view(); });
$("body").on("click","#zoom-in",function(){ view.zoom_in(); model_view(); });
$("body").on("click","#reset",function(){ 
    view.start = data_start_time;
    view.end = data_start_time + 10*24*365*3600;
    view.calc_interval(1200);
    model_view(); 
});

// -------------------------------------------------------------------
// Graph page dimensions
// ------------------------------------------------------------------- 
function resize()
{
    var width = $("#placeholder_bound").width();
    var height = $("#placeholder_bound").height();
    $("#placeholder").width(width);
    $("#placeholder").height(width*0.52);
}

$(window).resize(function(){
    resize();
});

resize();
