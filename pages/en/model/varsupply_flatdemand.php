---
title: Variable supply and flat demand
published: 2024-07-26
---
<?php global $path; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js" integrity="sha384-+mbV2IY1Zk/X1p/nWllGySJSUN8uMs+gUAN10Or95UBH0fpj6GfKgPmgC5EXieXG" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip-utils/0.1.0/jszip-utils.min.js" integrity="sha384-sLhugvyb7QXT38D573of73nmwbSPlCWTaRKJfuBgGCyoWijHVim5MtXquZN4VU0+" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js" integrity="sha384-RwhSkUmEGeOAldfwpJck6gcmrGxI7Q8shFWFF5lqnOihJnV556qpqUVpYNP7wSew" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.selection.min.js" integrity="sha384-CwXlgbYx235nUO+kK1VMvvpMQvCQBPTxSvnARPZ10KOjsCVYSalFvknxEzuQXwxi" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.time.min.js" integrity="sha384-qSVSrwJ8D6S0H6+MOkF7MBxx9C21JN6c8O8uZlZzGPMpLhsV0N015e/P4bdc4Whj" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.stack.min.js" integrity="sha384-HDhsF+TZWoNp9Id3vlhgMxzrxIZ0S0EzJ9ZnM8SQcMyejH+ZIspghhVVrT0GDlPp" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo $path; ?>pages/en/model/vishelper.js?v=1"></script>

Supply:
<select id="varsupply_flatdemand_gen_type" autocomplete="off">
    <option value=0 selected="selected">Onshore wind</option>
    <option value=1>Offshore wind</option>
    <option value=2>Wave power</option>
    <option value=3>Tidal power</option>
    <option value=4>Solar power</option>
</select>

Oversupply:
<select id="varsupply_flatdemand_oversupply" autocomplete="off">
    <option value=1.0 selected="selected">100%</option>
    <option value=1.1>110%</option>
    <option value=1.2>120%</option>
    <option value=1.3>130%</option>
    <option value=1.4>140%</option>
    <option value=1.5>150%</option>
</select>

View:
<button id="pan-left"><</button>
<button id="pan-right">></button>
<button id="zoom-out">-</button>
<button id="zoom-in">+</button>
<button id="reset">reset</button>

<div id="placeholder_bound" style="width:100%">
    <div id="placeholder"></div>
</div>

<pre id="out" style="font-size:16px; line-height:28px"></pre>

<p>This second example model's the degree of supply/demand matching between a variable renewable supply consisting of a single renewable energy generation type and a flat electricity demand profile.

<p>In this model the demand is subtracted from the supply for every hour in the 10 year period and the total amount of unmet demand and excess generation is measured as well as the amount of time the supply was more than or equal to the demand.

<p>The demand level has been set to an annual average electricity demand of 3300 kWh which is the average UK household annual electricity consumption. The amount of installed capacity is set to match this demand on the 10 year basis of the dataset.</p>

<p>Running the model for each of each generation type, matching total 10 year supply to total 10 year demand of 3300 kWh x 10 we get the following results:</p>

<table class="table">
    <tr>
        <td></td>
        <td style="width:12%">Onshore wind</td>
        <td style="width:12%">Offshore wind</td>
        <td style="width:12%">Wave</td>
        <td style="width:12%">Tidal</td>
        <td style="width:12%">Solar</td>
    </tr>
    <tr>
        <td>Installed capacity</td>
        <td>1.17kW</td><td>0.79kW</td><td>1.33kW</td><td>1.58kW</td><td>3.98kW</td>
    </tr>
    <tr>
        <td>Percentage of demand<br>supplied directly</td>
        <td>65.9%</td><td>76.4%</td><td>73.9%</td><td>57.7%</td><td>40.6%</td>
     </tr>
    <tr>
        <td>Percentage of time supply is<br>more or the same as the demand</td>
        <td>40.1%</td><td>46.2%</td><td>45.3%</td><td>38.6%</td><td>32.1%</td>
     </tr>
</table>

<p>We can see again here that offshore wind is the clear winner with the lowest installed capacity requirement and highest level of supply/demand matching. Perhaps an interesting result is how less predictable technologies such as wind and wave provide greater levels of matching than power from tidal which is very predictable.</p>

<script>

function model_init()
{
    gen_type = 0
    oversupply = 1.0
}

function model_run()
{
    total_supply = 0
    total_demand = 0

    exess_generation = 0
    unmet_demand = 0
    hours_met = 0
    
    traditional_electric = 3300
    hourly_traditional_electric = traditional_electric / (hours/10)
    
    // generation capacity requirement to match demand on annual basis
    // is calculated here using quick lookup capacity factors (obtained from running 1supply)
    CF = [0.3233,0.4796,0.2832,0.2387,0.0943]
    gen_capacity = (hourly_traditional_electric / CF[gen_type]) * oversupply

    data = [];
    data[0] = [];
    data[1] = [];

    for (var hour = 0; hour < hours-1; hour++) {
        var capacityfactors = tenyearsdatalines[hour].split(",");
           
        supply = parseFloat(capacityfactors[gen_type]) * gen_capacity
        total_supply += supply
        
        demand = hourly_traditional_electric
        total_demand += demand
        
        balance = supply - demand
        
        if (balance>=0) {
            exess_generation += balance
            hours_met += 1
        } else {
            unmet_demand += -balance
        }
        
        data[0].push(supply);
        data[1].push(demand);
    }

    gen_capacity_factor = total_supply / (gen_capacity*hours) * 100
    prc_demand_supplied = ((total_demand - unmet_demand) / total_demand) * 100
    prc_time_met = (1.0 * hours_met / hours) * 100

    var out = "";
    out += "Generator capacity: "+gen_capacity.toFixed(3)+"kW\n"
    out += "Capacity factor: "+gen_capacity_factor.toFixed(1)+"%\n"
    out += "\n"
    out += "Total supply: " + (total_supply/10).toFixed(1) + "kWh/y\n"
    out += "Total demand: " + (total_demand/10).toFixed(1) + "kWh/y\n"
    out += "\n"
    out += "Exess generation: " + (exess_generation/10).toFixed(0) + "kWh/y\n"
    out += "Unmet demand: " + (unmet_demand/10).toFixed(0) + "kWh/y\n"
    out += "\n"
    out += "Percentage of demand supplied directly "+(prc_demand_supplied).toFixed(1)+"%\n"
    out += "Percentage of time supply was more or the same as the demand "+(prc_time_met).toFixed(1)+"%\n"
    $("#out").html(out);
}
// ---------------------------------------------------------------------------    
	
function model_view(start,end,interval)
{
    $.plot("#placeholder", [
        {label: "Demand", data:timeseries(data[1]), yaxis:1, color:"#00aacc", lines: {lineWidth:0, fill: 1.0 }}, 
        {label: "Renewable Supply", data:timeseries(data[0]), yaxis:1, color:"#000000", lines: {lineWidth:1, fill: false }},
        ], {
            xaxis:{mode:"time", min:view.start*1000, max:view.end*1000, minTickSize: [1, "hour"]},
            grid: {hoverable: true, clickable: true},
            selection: { mode: "x" },
            legend: {position: "nw"}
        }
    );
}

$("body").on("change","#varsupply_flatdemand_gen_type",function(){
    gen_type = parseInt($(this).val());
    model_run();
    model_view();
});

$("body").on("change","#varsupply_flatdemand_oversupply",function(){
    oversupply = parseFloat($(this).val());
    model_run();
    model_view();
});

</script>
<script type="text/javascript" src="<?php echo $path; ?>pages/en/model/common.js?v=2"></script>
