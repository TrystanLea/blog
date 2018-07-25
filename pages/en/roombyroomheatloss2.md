## title: Room by room heat loss calculation 2
### published: 2018-07-25

**Calculation notes:**

- See Home Energy Assessment & Retrofit Scenario for full details on the house.

- Choosen U-values are discussed on the 'Home Energy Assessment' page.

- Party wall U-value of 0.5 W/K.m2 taken from MCS Heat Pump Calculator. The SAP assessment assumes that neighbouring properties are heated and that there is therfore no heat loss through solid party walls. The heat loss calculation below is based on the MCS Heat Pump Calculator which is intended for heating system design rather than energy performance comparison, hence taking into account real possibility where neighbouring property is unheated for a period of time.

- Average air changes per hour is higher than modelled using MyHomeEnergyPlanner which is based on SAP which suggested an effective air change rate of 0.74 air changes per hour (ACH). If we use the SAP suggested value the maximum heat requirement drops from 5523W to 4264W.

- Review mean water temperature, currently set to a relatively high 40C.

- Review EcoDan performance @ different flow temperatures. Table 5.2 suggests nominal COP of between 2.7 (-7C) and 3.15 (2C). The capacity also drops at lower ambient temperatures. The values listed in the Mid section are quite low.

- Show boundary temperature assumptions in view below

- No uplift factor taken into account in radiator & heat pump sizing.

**Heat loss calculation:**

Room by room heat loss calculation is based on the MCS Heat Pump Calculator that implements the EN12831 heat loss calculation standard.

<script type="text/javascript" src="files/midterrace_data.js"></script>
<link rel="stylesheet" type="text/css" href="lib/heatlossjs/style.css" />
<script type="text/javascript" src="lib/heatlossjs/model.js"></script>
<div id="heatloss"></div><script>heatloss.init("#heatloss")</script>

<p><b>Conclusion</b></p>
