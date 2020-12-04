## title: Assessments: Bothy
### published: 2018-07-05

As well as working on our own home. The following assessments & calculations repeat a similar process for other projects, primarily family. I will be uploading the calculations and results of projects undertaken here over time. 

---

The primary aim of the following calculation is to work out the radiator sizing for expanding the existing heat pump into the older part of the bothy. I also explore breifly the potential for more ambitious work on improving building fabric and air-tightness.

![bothylab_drawing.png](images/bothy/bothylab_drawing.png)

**Calculation notes:**

- U-value stone walls: The external walls are 0.85m thick, stone walls with plaster on hard. In the mid-terrace energy assessment I discuss [U-values of stone walls](http://trystanlea@org.uk/energyassessment) and choose a mid-range U-value of 1.7 W/K.m2, understanding that I might expect a range of U-values from 1.3 W/K.m2 up to 2.1 W/K.m2. The stone walls for the bothy are thicker than the mid-terrace house at 0.85m rather than 0.55m. 1.7 W/K.m2 corresponds to a thermal conductivity of 0.935 W/K.m which would result in a U-value of 1.1 W/K.m2 at a wall thickness of 0.85 m. There is likely a large error margin on these values, but I will use it as a starting point.

- Rear wall calculation does not take into account that the bothy is built into the bank at the back.

- The left wall contains a complicated deep fireplace detail that if inculded as an extended wall perimiter increases the wall length from 3.95m to 6.55m, increasing the heat loss accordingly.

- The wall between the old and new parts of the bothy are partially external and party wall, the new part is smaller in size. The difference in external area is 18.19 m2 - 12.68 m2 = 5.51 m2 (30%). Applying this 70/30 ratio to the internal area and assuming a door with a similar U-value to the wall for now, not too far off an assumtion, results in an approximate external area of 4.0m2 and party wall of 9.3m2.

- The floor in the old part is a solid slate floor, uninsulated, partial carpet. Using the [Carbon Coop Open Floor U-value Calculator](https://openflooruvaluecalculator.carbon.coop/) with: slab on ground, area:21.04, perimiter:17.47, ground:clay or silt, thickness of external walls:0.85, insulation:none. Results in a U-value of 0.693 W/K.m2.

- The floor in the new part is a concrete slab with carpet.  Using the [Carbon Coop Open Floor U-value Calculator](https://openflooruvaluecalculator.carbon.coop/) with: slab on ground, area:20.5, perimiter:15.45, ground:clay or silt, thickness of external walls:0.85, insulation:none. Results in a U-value of 0.731 W/K.m2.

- The rooves are insulated with ~100mm of rockwool between timber battons. Timber battons are at ~440mm spacing and 60mm thick. As a rough estimate 60/440 = 13.6% wood, 86% rockwool insulation. 

    1. The thermal conductivity of rockwool is 0.044 W/mK and so the U-value at 100mm would be 0.44 W/K.m2. 
    2. The thermal conductivity of timber is typically between 0.12 and 0.20 W/mK, assuming 0.16 W/mK would result in a U-value of 1.6 W/K.m2 at 100mm.
    3. Area of wood 25.6m2 x 0.136 = 3.5 m2 x 1.6 W/K.m2 = 5.6 W/K
    4. Area of rockwool 25.6m2 x 0.864 = 22.1 m2 x 0.44 W/K.m2 = 9.7 W/K
    5. Total roof heat loss = 15.3 W/K
    6. The combined U-value of the wood and rockwool is 0.6 W/K.m2.

- Calculation assumes secondary glazing U-values of 2.8 W/K.m2, double glazing U-values of 1.6 W/K.m2 and a door U-value of 3.2 W/K.m2.

    - [http://www.greenbuildingforum.co.uk/newforum/comments.php?DiscussionID=4572](http://www.greenbuildingforum.co.uk/newforum/comments.php?DiscussionID=4572)
    - [https://www.gsecg.com/benefits/thermal-insulation/](https://www.gsecg.com/benefits/thermal-insulation/)
    - [http://www.stormwindows.co.uk/benefits/u-value](http://www.stormwindows.co.uk/benefits/u-value)
    
- A background ventilation rate of 1.5 ACH is assumed, which corresponds to roughly 30 ACH @ 50Pa using the divide/multiply by 20 rule of thumb and ~18 m3/hr/m2 @ 50Pa. Again there is likely a large error margin here, 18 m3/hr/m2 @ 50Pa is almost twice the 2006 building regulations, the building is very drafty! [http://www.greenspec.co.uk/building-design/refurb-airtightness/](http://www.greenspec.co.uk/building-design/refurb-airtightness/)

- Radiator in bothy is 1.2m x 0.7m x 0.16m, cast iron and 4 layers deep. The heat output is expected in the 1.6 kW at 50K range e.g [http://www.castironradiators4u.co.uk/uk/civa-sa-ed4-660-19.php](http://www.castironradiators4u.co.uk/uk/civa-sa-ed4-660-19.php). At 35C it should contribute 400W, at 42C: 620W.

- No uplift factor taken into account in radiator & heat pump sizing.

**Heat loss calculation:**

Room by room heat loss calculation is based on the MCS Heat Pump Calculator that implements the EN12831 heat loss calculation standard.

<script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
<script type="text/javascript" src="lib/heatlossjs/config_new.js?v=1"></script>
<script type="text/javascript" src="files/project2/bothylab_data.js?v=1"></script>
<link rel="stylesheet" type="text/css" href="lib/heatlossjs/style.css?v=1" />
<script type="text/javascript" src="lib/heatlossjs/model.js?v=1"></script>
<div id="heatloss"></div><script>heatloss.init("#heatloss")</script>

<p><b>Conclusion</b></p>

<p>Without work to improve the building fabric, it looks like the addition of one Dimplex SmartRad SRX180 and one 1200x600 double panel convector to the existing heat pump system would be sufficient to achieve 18-21C in the old part of the bothy during the relatively rare occasions that outdoor temperatures reach -3C. The total heat requirement would however push the 5kW ecodan heat pump to its limit during these times. The old part of the bothy does have a ClearView wood stove which could be used to topup the heat requirement at the coldest times.</p>

<p><b>Retrofit notes</b></p>

<p>In the long term it would be better to improve the building fabric in order to reduce the space heating requirement. Entering the following U-values and ventilation rate in the calculator above suggests a potential to reduce demand by 45%:</p>

<ul>
<li>Hemp lime insulation should allow for a U-value of around ~0.6 W/K.m2.</li>
<li>Higher performance double glazing and an insulated door ~1.6 W/K.m2.</li>
<li>Floor insulation with 100mm of XPS, U-value of ~ 0.2 W/K.m2<br><a href="http://www.greenspec.co.uk/building-design/ground-floor-insulation/">http://www.greenspec.co.uk/building-design/ground-floor-insulation</a></li>
<li>Adding 50mm of woodfibre board insulation to the roof would result in a U-value of 0.36 W/K.m2</li>
<li>If we aimed to meet the AECB Silver standard for MEV of 3.0 ACH, but also ensured that there was 30m3/hr per person of ventilation without heat recovery, the air change rate would need to be 0.84 ACH.</li>
</ul>

<p>The cumulative effect of these measures would be to reduce space heating demand and the maximum heat requirement by ~45% to 7318 kWh and 2535W respectively.</p>
