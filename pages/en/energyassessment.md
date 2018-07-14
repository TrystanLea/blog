## title: Household Energy Assessment with MyHomeEnergyPlanner
### published: 2018-04-10

Perhaps the first step in understanding the energy performance of a house is to carry out a household energy assessment.

[MyHomeEnergyPlanner](http://github.com/emoncms/MyHomeEnergyPlanner) is an open source energy assessment tool developed as part of a collaboration between OpenEnergyMonitor and CarbonCoop. Particular credit should go to [Marianne Heaslip](https://github.com/marianneURBED), architect at URBED for her knowledge, experience and thorough testing which has guided the development of the tool and [Carlos Alonso Gabizon](https://github.com/cagabi) at Carbon Coop who took over as lead software developer in late 2015.

The model used is based on the 2012 version of SAP (Standard Assessment Procedure for UK EPC's (Energy Performance Certificate's) developed by the Building Research Establishment for which the full specification can be downloaded from BRE here: [SAP-2012_9-92.pdf](http://www.bre.co.uk/filelibrary/SAP/2012/SAP-2012_9-92.pdf).

This post walks through the process I took to create an initial energy assessment for our house before then going on to explore the results.

<div style="clear:both"></div>

### Measuring up the house

I started by creating a 3D sketchup model of the house so that I could then use this model to access any measurements I needed at a later date. In previous assessments that I've done for other buildings I have drawn a 2D floor plan instead which works just as well for the purposes of a basic assessment.

I used a laser measurement tool to take all the measurements.

Here's a screenshot of the resulting sketchup model: 

![sketchup](images/sketchup.png)

- Measure each wall dimension without initially taking into account the window's and doors, place the dimension on the floor plan. 
- Draw an indication of wall widths and include internal walls.
- Draw the windows and doors on the floor plan and note each windows width and height.
- Label each room and note the room height.
- Labelling each external wall with a unique name: E1, E2, E3 etc
- Do the same for the windows: W1, W2, W3..

Here's my resulting 2D floor plan:

![floorplan](images/floorplan.png)

### Create your own MyHomeEnergyPlanner assessment

- Login or create an account in emoncms: [https://emoncms.org](https://emoncms.org)
- Navigate to Extras > MyHomeEnergyPlanner
- Create and then open a new assessment, you can give the assessment a name and a description.

### 1. Context:

The context section starts with overall building dimensions, noting the floor area and average storey heights for each floor. The total storey floor area is calculated by summing up all the room floor areas. I have included the living-room bay window area and slightly longer hall length in my calculation.

For dwelling altitude Google maps is a useful tool.

<img style="border: 2px solid #ddd" src="images/1-context.png">

### 2. Ventilation

A key cause of heat loss is ventilation and infiltration. The movement of heated air from inside the house into its surroundings and its replacement by cold air from outside. The ventilation and infiltration section allows selection of both deliberate ventilation sources and infiltration through the building fabric and other sources of draughts.

Ventilation in the house is achieved by a mixture of open windows when needed and intermittent extract fans. I selected the intermittent extract ventilation option and added two extract fans, one in the kitchen and the other in the bathroom.

The house is sheltered to the north and on both sides as it is a terrace house, the front is south facing an relatively unsheltered.

<img style="border: 2px solid #ddd" src="images/2-ventilation.png">

### 3. Fabric

The Fabric section is used to enter the dimensions, u-values and other thermal properties of all external and internal walls, floors, the roof and windows of the building. 

#### Walls

The walls are of stone construction and are plastered on both sides, the thickness varies from 500mm to 800mm with a median of around 550mm.

MyHomeEnergyPlanner has a built in element library with U-values for different construction types. However it is a good idea to delve a little deeper into element U-values than just picking an element from the library. This is particularly the case if you have traditional construction, there are many factors that affect the thermal performance of walls from additional layers such as plaster to moisture content.

The Domestic Heating Design Guide v1.0 provides three different U-values for solid stone walls and they are all for unplastered walls: 

- Stone 305mm (12in) 2.78 W/K.m2 
- Stone 457mm (18in) 2.11 W/K.m2
- Stone 610mm (24in) 1.68 W/K.m2

Historic Scotland performed in-situ monitoring on solid stone walls with the following findings, suggesting generally lower U-values:

- Stone wall 600mm, plaster on laths: 1.1 W/K.m2 +- 0.2W/K.m2
- Stone wall 600mm, drylined with plasterboard: 0.9 W/K.m2 +- 0.2W/K.m2
- Sandstone 550mm, bare: 1.4 W/K.m2 +- 0.1W/K.m2

Although not included in their summary of results a number of walls with plaster on hard where also tested as part of the Historic Scotland study:

- Stone wall 300mm, plaster on hard: 2.3 W/K.m2 (id 1.2)
- Stone wall 350mm, plaster on hard: 1.8 W/K.m2 (id 9.2)
- Stone wall 400mm, plaster on hard: 1.1-1.5 W/K.m2 (id 8.1-4)
- Stone wall 600mm, plaster on hard: 1.6 W/K.m2 (id 1.1)

CIBSE and Energy Savings Trust figures quoted in the Historic Scotland report suggest:

- Energy Savings Trust: 1.7 W/K.m2 for traditional sandstone (or granite) dwelling with solid walls: stone thickness typically 600 mm with internal lath and plaster finish (for the pre‐1919 period)

- CIBSE Guide: 1.38 W/K.m2 for a 600 mm stonewall with a 50 mm airspace and finished with 25 mm dense plaster on laths

The paper 'Solid-wall U-values: heat flux measurements compared with standard assumptions' by the BRI suggests that real world U-values for solid walls may be in the region of 1.3 W/K.m2 rather than 2.1 W/K.m2.

None of the above fit the walls in our house perfectly, as we have an external cement render, a solid stone wall and then plaster on hard, with a total thickness of around 550mm. My guess and starting point will be to model our wall u-values at 1.7 W/K.m2 as this provides a good mid-point between the 350mm and 600mm plaster on hard examples above. I will also model a range of U-values from ~1.3 W/K up to 2.1 W/K to understand the implications on total space heating demand.

Here I have entered all the walls in order following the floor plan labelling. 

<img style="border: 2px solid #ddd" src="images/3-walls.png">

#### Floor and Roof

The floor in the living-room has a suspended insulated wooden floor above the underlying solid floor, retrofitted by a previous owner. The total thickness of the insulated floor is 60 mm of which ~20mm is the timber suggesting 40mm of insulation.

The Domestic Heating Design Guide has a number of tables that give U-values for solid floors in contact with earth, depending on the number of exposed edges and lengths of exposed edges. 

The main part of the ground floor has two opposite edges exposed at a spacing of about 7m. This would give an insulated U-value of between 0.32 W/K.m2 (50mm insulation) and 0.43 W/K.m2 (25mm insulation). I will use a value in the middle at 0.38 W/K.m2.

The hall has only one edge exposed with a room depth of 7m and no insulation suggesting a U-value of 0.38 W/K.m2.

The kitchen has two edges exposed at a combined length of 5.4m and again no insulation suggesting a U-value of 0.9 W/K.m2.

The loft has 250mm of mineral wool insulation, it is however compressed down in places to a minimum of 100mm. The average thickness is more likely in the 200mm range.

**CarbonCoop Open Floor U-value calculator**<br>
Since writing the above Carbon Coop have launched an open floor U-value calculator that implements *the thermal transmittance calculation of floors as specified in BS EN ISO 13370:2007*. With this tool I calculate the U-value of the uninsulated kitchen floor to be 0.994 W/K.m2 and the U-value of the uninsulated hallway floor to be 0.316 W/K.m2 assuming the exposed edge is only the front door opening width of 1m.<br>[http://openflooruvaluecalculator.carbon.coop](http://openflooruvaluecalculator.carbon.coop/)

<img style="border: 2px solid #ddd" src="images/4-floorloft.png">

#### Windows

The windows in the house are all double glazed wooden windows but they are all very thin at a spacing thickness of 6mm. Testing for low-E glass coating by checking for a different colour reflection suggests that there is no low-E coating present. Assuming they are air filled rather than argon filled the suggested U-value is 3.1 W/K.m2. An argon fill would improve this only slightly to 2.9 W/K.m2.

I decided to use the 'Solid Timber/uPVC Door' element type even though both doors contain double glazing as the available elements with double glazing have lower U-values than the solid timber door type and its likely that the U-value of the doors are higher due to the thin 6mm double glazing present with a U-value of 3.1 W/K.m2

<img style="border: 2px solid #ddd" src="images/5-windows.png">

### 4. Lighting, Appliances & Cooking

Lighting, appliances and cooking all contribute heat gains into a house reducing the amount of additional heat required. It is possible to either use a SAP based calculation as part of this section or a more detailed SAP for lighting and appliance list for appliances and cooking approach.

I've used the standard SAP for lighting and then Carbon Coop appliance list here entering in the loads we have.

<img style="border: 2px solid #ddd" src="images/8-carboncoopappliancelist.png">

### 5. Heating

**Hot water demand:** 

For the hot water demand section I put a tick in the designed water use is not more than 125 litres per person per day and then set the water efficiency to 'standard water use'. The SAP calculation predicts a annual energy content of 1285 kWh/year.

**Space heating demand:** 

I set the living area to 24.4 m2 the area of the living and dining room. I also set the target temperature to 21C even though this is higher than our actual target temperature. 21C is the temperature standard used by SAP used for household performance comparison and its also the living area target temperature that heating systems are usually designed to achieve. A target temperature of 21C results in a mean internal temperature of ~19C due to lower temperatures in heating off times and non-living areas.

**Heating systems:** 

Our current 'heating system' is a wood stove with a back boiler, basic room electric heaters and an instantaneous electric shower. 

As we haven’t been in the house for long the average proportion of space heating from the wood stove vs room electric heaters is still unclear, my initial estimate is somewhere around the 50%/50% mark. 

The portion of hot water heating from electric vs the woodstove is also unclear, most of the woodstove hot water is used for washing up and hand washing and the washing up is often topped up from the kettle, I therefore estimate the proportion from electric to be 85% and from the woodstove 15%.

I selected a 120L 25mm factory insulated cylinder for hot water storage.

**Fuels: Electricity**

Apart from selecting lower U-values for the stone walls than those suggested in SAP and the Domestic Heating Design Guide (1.7 vs 2.1) and using the appliance list calculator. The main other area I have deviated from the standard SAP assumptions are on the CO2 emissions associated with electricity use where I used my estimate of UK Green Tariff CO2 emissions based on a calculation of who pays for the renewable energy subsidies of 0.218 gCO2/kWh. This is not a value endorsed as far as Im aware by anyone, it is I think a good balance in between the all or nothing view point on CO2 emissions from green tariffs but its certainly a subject full of debate and Im not sure that I have it right either, See <br>[https://learn.openenergymonitor.org/sustainable-energy/energy/greentariffs](https://learn.openenergymonitor.org/sustainable-energy/energy/greentariffs) for full discussion. I have also included below the results from using the 2015 UK Grid average CO2 emissions, which where 367 gC02/kWh. 

**Fuels: Wood burning**<br>
Although on the face of it wood burning appears to be a zero carbon fuel. It is as many of these things, it's quite a bit more complicated. Burning wood does of course release CO2 emissions and carbon neutrality would require that over a short time span the same amount of CO2 would need to be absorbed by growing sustainably managed biomass supply e.g: woodland and coppice. Wood has other uses such as building materials and can be used in such a way to sequester carbon, Nick Grant and Alan Clarke make a strong argument in their Biomass a burning issue paper that if we use forestry for carbon sequestration (in building materials etc) and burn gas rather than fuel biomass boilers the overall result would be carbon negative. A key worry is that biomass boilers and RHI are leading to a watering down of energy efficiency efforts.

Another key challenge associated with biomass burning is land use, if wood logs are used in wood burning stoves or biomass boilers these come from forests or woodlands with very low yield rates. Broadleaf and coniferous woodland has a biomass yield rate of 0.38 odt/ha/yr and 0.8 odt/ha/yr respectively (ZeroCarbonBritain), at these yield rates, even if we achieved a 60% reduction in space heating demand for all UK housing we would still need a land area of between 2.3x and 4.6x the UK to supply enough wood to meet the remaining demand. Short rotation coppice such as willow has a much higher yield (9-12 odt/ha/yr) and rotation time than growing larger trees such as broadleaf or coniferous woodland, a difference of almost 18x. This would in theory if the numbers are correct reduce the amount of land required to 14% of UK land area. Scenarios such as ZeroCarbonBritain still do not rely on wood burning in a significant way and usually choose heat pumps that can use renewable electricity for the bulk of heat demand. 

A third critical issue is the negative health effects of wood burning, wood smoke has high particulate emissions and carcinogens.

- [https://www.aecb.net/publications/biomass-a-burning-issue/](https://www.aecb.net/publications/biomass-a-burning-issue/)
- [http://www.woodheatassociation.org.uk/willow-the-fast-track-to-self-supply-woodfuel/](http://www.woodheatassociation.org.uk/willow-the-fast-track-to-self-supply-woodfuel)

### Model Results

<img style="border: 2px solid #ddd" src="images/9-overview.png">

At the top of the MyHomeEnergyPlanner interface an overview of the home's performance is shown. We can see that space heating demand and primary energy demand are slightly higher than the national average. The model suggests it has a space heating demand is about 5 times larger than the passivhaus retrofit standard.. The CO2 emission rate is about half the national average, due to use of wood heating and green tariff, as discussed. 

The total heat loss rate is shown in the centre of the house graphic on the left. This figure is particularly useful when designing heating systems as it can be used to calculate the maximum heat input required on a cold winters day. We can multiply the heat loss rate with the difference between the internal and external temperature. As an example: if the internal temperature is 21C and the outside temperature is -3C the heat requirement would be 204 W/K x (21C - -3C) = 4896 Watts.

The fuel requirements page goes into a bit more detail on the different household energy demands. The model suggests that our annual space heating demand should be around 9714.05 kWh (26.6 kWh/d).

<img style="border: 2px solid #ddd" src="images/10-fuelrequirements.png">

The model is based on SAP 2012 which is a monthly model. The SAP worksheets page provides a summary of these calculations including the monthly space heating requirement. We can see that the coldest month January has a space heating requirement of 1691 kWh (54.5 kWh/d), twice the annual average and the equivalent of leaving a 2.3 kW heater on all of the time.

<img style="border: 2px solid #ddd" src="images/11-sapworksheet.png">

### Assessment summary

- **Heat loss rate:** 204 W/K
- **Lighting, Appliances and Cooking (LAC) electric:** 313.96+809.52+342.00 = 1465 kWh (4.0 kWh/d)
- **Water heating demand (DHW):** 2429 kWh (6.7 kWh/d)
- **Space heating demand:** 9714 kWh (26.6 kWh/d)
- **Electricity:** 8563 kWh (LAC+DHW+50% space heating) (23.5 kWh/d)
- **Wood:** 1607 kg (6,587 kWh @ 4.1 kWh/kg)
- **CO2 Emissions:** 1992 kgCO2
- **CO2 Emissions @ standard grid mix 367gCO2/kWh:** 3268 kgCO2
- **Biomass land use:** 2.7 hectares

Land area requirement for wood consumption is based on a mix of broad-leaf and coniferous woodland at 0.38 odt/ha/yr and 0.8 odt/ha/yr respectively. The energy output per odt is 4720 kWh/odt.

    wood requirement: 6587 kWh / 4720 kWh/odt = 1.396 odt
    mean odt/ha/yr: (0.38+0.8)/2 = 0.59
    land area requirement: 1.586 / 0.59 = 2.4 ha/yr
    
There is roughly 0.94 hectares of land per household in the UK. If everyone where to heat their houses with wood logs at the rate suggested here we would need a land area 2.7x the land area of the UK which is clearly un-scalable. There is also the significant problem of air pollution and resulting health impact from wood burning, especially in a low efficiency boiler stove.

### ZeroCarbonBritain

How does our house as it currently stands compare to where we need to get to? The ZeroCarbonBritain scenario developed by the Centre for Alternative Technology aims for a domestic space heating demand reduction of 60% from an average of 27.8 kWh/d down to 11.1 kWh/d through insulation, better windows and doors, draught and air leakage reduction, better controls and lower internal temperature. The remaining 11.1 kWh is provided for predominantly by heatpumps needing only 4.4 kWh/d of electrical input.

The model therefore suggests that our house requires 2.4 times the heat demand of the average home in the ZeroCarbonBritain scenario. We would need to reduce the heat demand by 58% to meet the average level.

### AECB Silver Standard

The [AECB Silver Standard](https://www.aecb.net/carbonlite/building-certification/aecb-silver-standard) is "aimed at those wishing to create high-performance buildings using widely available technology at little or no extra cost. We estimate that this low-risk option will reduce overall CO2 emissions by 70% compared to the UK average".

    Delivered Heat and cooling: ≤ 40 kWh/m2.a
    Air-tightness n50: MVHR: ≤1.5h-1, MEV: ≤3.0h-1
    
Our total floor area is 76.8 m2 which would translate to a target space heating requirement of 3072 kWh or 8.4 kWh/d, 24% less than the ZeroCarbonBritain average. ZCB is of course a national energy scenario and assumes a broad mixture of building types. The ZCB scenario targets passivhaus standards for all new build buildings.

### Passivhaus Retrofit

The passivhaus retrofit standard aims for a space heating demand of 25 kWh/m2/year. Our total floor area is 76.8 m2 which would translate to a target space heating requirement of 1920 kWh or 5.2 kWh/d.

### Lower internal temperature

Our actual mean-internal temperature from November 2017 through to April 2018 has actually been much lower than the 18.5C suggested by the model based on a 21C target temperature. The actual mean internal temperature in the house was 14.0C!

If I instead model a target temperature of 16C this results in a mean internal temperature of 14.2C. Which drops the modelled space heating demand to 4707 kWh (12.9 kWh/d) or half the 18.5C level. This is likely to be closer to our actual consumption although I wouldn’t recommend such low temperatures and we do hope to improve on comfort if we carry out retrofit work.

The next post will explore the effect of improving the building fabric and a better heating system, with the intention to both achieve a greater level of comfort and reduce space heating demand to ZeroCarbonBritain levels or better.

---

### Appendix: A basic estimation of error in input

**Wall U-values**

I noted above that the external wall U-values may be a significant source of error in the model. The following results show space heating demand across the likely stone wall U-value range:

Assessment results with wall U-values of 1.3 W/K.m2:

- **Heat loss rate:** 187 W/K
- **Space heating demand:** 8785 kWh (24.1 kWh/d)

Assessment results with wall U-values of 1.7 W/K.m2:

- **Heat loss rate:** 204 W/K
- **Space heating demand:** 9714 kWh (27.3 kWh/d)

Assessment results with wall U-values of 2.1 W/K.m2:

- **Heat loss rate:** 222 W/K
- **Space heating demand:** 10,615 kWh (29.1 kWh/d)

**Infiltration and Ventilation rate**

Another potential significant source of error is heat loss through ventilation and infiltration. The air change rate calculated by SAP is often quite low, my assessment currently suggests an effective air change rate of 0.74 ACH. The Whole House Book by Cindy Harris and Pat Borer gives a rough guide of:

    4 for an old, un-draught stripped hous
    1 to 2 for an average modern house
    0.6 for a very tight, super insulated house

Our base case @ 0.74 ACH:

- **Heat loss rate:** 204 W/K
- **Space heating demand:** 9,714 kWh (27.3 kWh/d)

An average modern house @ 1.5 ACH

- **Heat loss rate:** 251 W/K
- **Space heating demand:** 12,338 kWh (33.8 kWh/d)

An average modern house @ 2.0 ACH

- **Heat loss rate:** 281 W/K
- **Space heating demand:** 13,893 kWh (38.1 kWh/d)
