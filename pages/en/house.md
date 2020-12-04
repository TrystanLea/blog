## title: Assessments: Main House
### published: 2018-07-27

![mainhouse.png](images/project2/mainhouse.png)

**Calculation notes:**

- U-value stone walls: The external walls are ~0.65m thick stone walls with 30mm of cellulose fibre insulation on the majority of walls appart from the larder, porch and landing. Assuming a thermal conductivity of 0.935 W/m.K for the stone wall part, 0.65m gives a U-value of 1.44 W/K.m2.
    - Cellulose (blown/sprayed): [0.040 W/m.K](http://www.greenspec.co.uk/building-design/insulation-materials-thermal-properties/)
    - Timber battens: 0.16 W/m.K
    - Combined U-value 30mm x 30mm timber battens at 400mm spacing with cellulose insulation: 1.63 W/K.m2.
    - 10mm Plaster board: 0.17 W/m.K, U-value: 17 W/K.m2
    - Combined U-value of all components: 0.73 W/K.m2

- North West ground floor wall calculation does not take into account that the house is built into the bank.

- Complicated range cooker inset in North West ground floor is ignored in calculation.

- The kitchen, porch and larder have solid tiled floors. The Livingroom has a carpet on a concrete slab. Using the [Carbon Coop Open Floor U-value Calculator](https://openflooruvaluecalculator.carbon.coop/) with: slab on ground, area:37.9, perimiter:24.82, ground:clay or silt, thickness of external walls:0.65, insulation:none. Results in a U-value of 0.680 W/K.m2.

- The rooves are insulated with ~200mm of rockwool between timber battons, there are two layers of battons perpendicular to each other reducing thermal bridging. The thermal conductivity of rockwool is 0.044 W/mK and so the U-value at 200mm would be 0.22 W/K.m2.

- Calculation assumes secondary glazing U-values of 2.8 W/K.m2, 1.6 W/K.m2 for the double glazed front door and 3.2 W/K.m2 for the back door.

- No uplift factor taken into account in radiator & heat pump sizing.

**Heat loss calculation:**

Room by room heat loss calculation is based on the MCS Heat Pump Calculator that implements the EN12831 heat loss calculation standard.

<script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
<script type="text/javascript" src="lib/heatlossjs/config_new.js?v=1"></script>
<script type="text/javascript" src="files/project2/mainhouse_data.js?v=1"></script>
<link rel="stylesheet" type="text/css" href="lib/heatlossjs/style.css?v=1" />
<script type="text/javascript" src="lib/heatlossjs/model.js?v=1"></script>
<div id="heatloss"></div><script>heatloss.init("#heatloss")</script>
