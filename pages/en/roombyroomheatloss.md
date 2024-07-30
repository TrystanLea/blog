## title: Room by room heat loss calculation
### published: 2017-12-29

*Updated: July 2024*

The first step in any heat pump system design is to do a heat loss calculation. This calculation is a way of estimating the amount of heat that a house needs, to reach a target internal temperature when it's very cold outside. It is also used to size radiators or under floor heating in order to ensure that each room has the right amount of heat going into it.

The results of a heat loss calculation is only as good as the assumptions that go into it and while it is relatively easy to accurately measure room dimensions, other assumptions such as air change rates and fabric U-values are more challenging to get right. The current CIBSE guidance for pre-2000 air change rates in particular are resulting in widespread over-estimates of building heat loss and therefore over-sizing of the resulting heating system.

There are a large number of good heat loss calculation tools. One of the easiest free tools is [https://heatpunk.co.uk](https://heatpunk.co.uk) by Midsummer. I have also developed my own open source tool called [HeatLoss.js](https://openenergymonitor.org/heatlossjs) and while it has some advanced features, it is certainly harder to enter in all the building dimensions.

#### Left: HeatPunk by Midsummer. Right: HeatLoss.js by OpenEnergyMonitor.

![heatpunk_heatlossjs.png](images/heatloss/heatpunk_heatlossjs.png)

### Heat loss calculation steps:

**1\. What is the house made of?** Tools typically start by defining a list of the materials and associated U-values for the different building elements: External walls, Internal walls, Ground floor, Intermediate floor/s, Loft/roof, Windows and Doors. MCS provide a guidance document on U-values which provides a useful starting point, see: [Guidance on U-values from Domestic Heating Design Guide](https://mcscertified.com/wp-content/uploads/2020/04/Guidance-on-U-Values-from-Domestic-Heating-Design-Guide.pdf). It is worthwhile searching for the latest research on U-values, as the design guide is not always realistic or up to date. A good example is the [research by SPAB](https://www.spab.org.uk/sites/default/files/documents/MainSociety/Advice/SPABU-valueReport.Nov2012.v2.pdf) on real world U-values of solid stone walls, which suggests typical U-values closer to 1.5 W/K.m2 for 500mm thick walls. I have used this value in my updated heat loss calculations included below.

<img src="images/heatloss/spab_solid_stone.png" style="max-width:600px">

**2\. Draw a plan of the house.** Measure all the room, window and door dimensions. With Heatpunk you can draw the house up using the 2D design tool on the fly. While it is good to be as accurate as possible, this does not have to be perfect, the errors introduced by other assumptions are much greater than errors that are likely to be introduced by being out by a little bit on the plan. For that matter the calculation method itself and convention of using internal dimensions or not fully taking into account internal wall widths and corner details will itself introduce more sources of error than getting a dimension out by a few centimetres. It can make sense to simplify and rationalise the plan so that dimensions line up between floors to make entry easier.

**3\. Select room temperatures.** For non-MCS installations you can choose the internal temperatures as you see fit to match your comfort preferences. For an MCS installation the MIS_3005 MCS design standard states that the system *"should"* use internal temperatures not less than those specified in Table 1. Where the term *"should"* indicates a prescribed *"requirement or procedure that is intended to be complied with unless reasonable justification can be given"*. This suggests that there could be wiggle room for selecting lower temperatures (e.g in the bathroom) but what might pass for *reasonable justification* is not described in any further detail in the document.

Here are the relevant tables from the MCS MIS_3005 standard document and the CIBSE Domestic Heating Guide for reference:

![internal_temperatures.png](images/heatloss/internal_temperatures.png)

It is interesting to note that average internal temperature that results from the range of standard MCS room temperatures in a typical domestic property works out to a less stringent requirement than assuming an even internal design temperature of 20C throughout (e.g Passivhaus requirement). In my mid-terrace house 21C in the livingroom, 22C in the bathroom but 18C everywhere else works out to an average internal temperature of 19.3C.

The most challenging room temperature target for system design is arguably the bathroom temperature target of 22C. The assessed heat loss for our bathroom is relatively high due to two external walls, the space for a large radiator was also limited. I therefore undersized our bathroom radiator. The temperature has however worked out just fine in reality and feels comfortable enough (typically around 19-20C when in use), the bathroom gains a bit of heat from the hot water cylinder and heat pump pipework which is not usually included in simple heat loss calculations. It is also partly heated by air moving up from the larger radiator in hall.

For our heat loss calculation I deviated slightly from the CIBSE guidance and targeted 20C in the livingroom and 19C everywhere else. This actually results in the same overall 19.3C average temperature, it's just a slightly different distribution, warmer bedrooms, hall and landing, cooler bathroom.

**4\. Select room air change rates.**

This is arguably one of the most important, yet most often overlooked factor in heat loss calculations. As mentioned above the current CIBSE guidance for pre-2000 air change rates suggests air change rate values that are significantly higher than are likely in reality. This is resulting in widespread over-estimates of building heat loss. This topic has been a particular topic of interest of mine at OpenEnergyMonitor.

To give an example for our mid-terrace house: 

- Pre-2000 CIBSE guidance (see [Table 3.8 here](https://docs.openenergymonitor.org/heatpumps/air_change_rate_calculations.html)) suggests using an air change rate of 1.5 air changes per hour (ACH) in the livingroom, 1.0 in bedrooms, 2.0 in the kitchen and hall and 3.0 in the bathroom. These values would result in an average whole house air change rate of ~1.7 ACH for our house.

- We had a blower door test done of our house that gave a n50 result of 10.4 ACH @ 50 Pa (without taping up vents). Dividing this 20 (rough rule of thumb) gives 0.52 ACH. The SAP 2012 calculation method would modify this slightly to take into account a shelter factor and average January wind speeds to give a value of 0.65 ACH. The more recent Home Energy Model methodology suggests a slightly higher value of 0.74 ACH. See my more detailed write-up over at OpenEnergyMonitor about this here: <b>[Air change rate calculation methods: SAP 2012 & Home Energy Model](https://docs.openenergymonitor.org/heatpumps/air_change_rate_calculations.html#sap-2012)</b>

- Using CO2 monitoring I recorded a range of air change rates for our house using the decay method of between 0.32-0.77 ACH. The averaging method suggested typical values in January of around 0.6 +-0.2 ACH, though this can rise to 1.24 ACH during strong wind storms. These storms are usually associated with warmer outside temperatures which help balance out the effect of the higher air change rate. See again my more detailed write-up over at OpenEnergyMonitor about this here: <b>[Measuring air change rates with CO2 sensors](https://docs.openenergymonitor.org/heatpumps/measuring_ach_with_co2.html)</b>

The blower door and CO2 monitoring results suggest that a whole house air change rate of around 0.6 +-0.2 ACH is typical for our house, this value is coincidentally the same value that results from the Part F building regulations minimum whole dwelling ventilation rate (Table 1.3). Which also works out to 0.6 ACH for our house. See section on: <b>[Part F building regulations.](https://docs.openenergymonitor.org/heatpumps/air_change_rate_calculations.html#part-f-regulations)</b>

I have used 0.6 ACH for all rooms in my heat loss calculation examples below. This reduces overall heat loss from ventilation by ~1.5 kW compared to assuming default pre-2000 CIBSE values. Which is a big difference and often makes the difference between selecting a 5 kW heat pump and the next size up on domestic heat pump calculations.

**5\. Select a suitable design outside temperature.**

The MCS design standard states that the heat loss calculation *"should be performed .. using external temperatures specified in Table 2 colum A or B, according to the MCS Contractor's assessment of the building location. If column B is selected no uplift factor for intermittent heating is required."*. The term *should* again means that alternative values are allowed provided *reasonable justification can be given*.

We can see from this table that the suggested design temperature varies significantly across the country:

<img src="images/heatloss/mcs_design_temperatures.png" style="width:300px">

The heatpunk tool suggests a design temperature of -3.6C for my location. I have typically used -3C from Table 3.7 of the CIBSE domestic heating guide. I think there is actually a good case for a higher design temperature in our particular location. Analysing temperature data from my own outside temperature sensor with 5 years of data suggests a design temperature of -1.1C (99.6%) and 0.0C (99%). Met office data for the local village over the last year suggests -1.4C (99.6%) and -0.1C (99%). I have documented further results and example code for calculation [here](https://trystanlea.org.uk/reading-historic-data-wowmetoffice).

**6\. Ground temperatures and heated or unheated neighbours?**

MCS state that the average external air temperature is to be used for the ground temperature on the other side of a solid floor. The nearest location in the [MGD 007 Section 5 table page 44](https://mcscertified.com/wp-content/uploads/2021/10/MGD-007-Reference-Information-and-Tools-Issue-1.0.pdf) suggests 10.0C. Met office data for our nearest village suggests 10.6C.

The CIBSE Domestic heating guide states that adjoining properties should be treated as unheated spaces to ensure that the heating system has enough capacity even when the adjoining property is unoccupied. An unheated temperature corresponding to the average external air temperature is suggested (e.g 10C).

In our mid-terrace case, both neighbours are occupied and heated. Setting the neighbouring temperature to ~18C produces a heat loss value that more closely matches measured heat demand ~3.3 kW. If both neighbours are unheated this would jump up to 4.2 kW!

### Example calculations:

The following example heat loss calculations in both Heatpunk and Heatloss.js use the key modifications to standard input assumptions discussed above, including:

- Stone wall U-value: 1.5 W/K.m2
- Modified air change rates: 0.6 ACH
- Outside design temperature based on weather data: -1.4C
- Heated neighbours: 18C

Heat loss calculations:

- [HeatLoss.js example calculation](https://openenergymonitor.org/heatlossjs). Heat loss: 3340W.

- [Heatpunk heat pump design report](files/midterrace_heatpunk_design_report.pdf). Heat loss: 3553W.

**Typical vs worst case conditions**

- If neither neighbours were heated and temperatures settled at the average outside temperature our heat loss could increase from 3.3 kW to 4.2 kW.

- If air change rates were 0.8 ACH during windier periods and neighbours unheated, heat loss could increase to 4.5 kW. If air change rates were 1.24 ACH during a strong beast from the east wind storm that combined with sub zero temperatures and both neighbours were unheated this could push the heat loss up to 5.1 kW.

Some over-sizing of the heat pump vs the accurate typical heat loss of e.g 3.3 kW is probably fine. We have a 5kW Ecodan that can reliably deliver up to 4.2-4.5 kW during heavy defrost conditions. This 1.27x to 1.36x over-sizing factor (on an accurate heat loss, avoid over-sizing on an inflated heat loss!) gives us some margin to work with that can cover at least some of these worst case conditions.

**Its easy to over-inflate heat loss!**

If we start with our base heat loss above in the HeatLoss.js example of 3340W and change the key input assumptions to use standard values:

- Base heat loss = 3340W (Agrees with measured heat demand)
- Stone wall U-value. Change 1.5 W/K.m2 to 2.23 W/K.m2 = 4078W
- CIBSE pre-2000 air change rates. Change 0.6 ACH to pre-2000 CIBSE = 5413W
- Outside design temperature. Change -1.4C to -3.6C and ground temperature to 10C = 6001W
- Unheated neighbours. Change 18C to 10C = 7457W

It is quite normal for heat loss calculations to be done using these standard values and it is unfortunately leading to some fairly significant system over-sizing, further over sizing factors are often added on top of these inflated heat loss results as you choose the next heat pump size up. I made most of these errors myself when I did my first heat loss calculation for the house in 2017 coming out with a heat loss of 6 kW (see below). I luckily choose to undersize the heat pump (I thought that I might need to top up using the wood stove but this turned out not to be needed). The next heat pump up in the Ecodan range was 8.5 kW, which would have resulted in an over-sizing factor of 2.5x!

**A note on hot water demand and heat gains**

Perhaps with the goal of keeping calculations simple, most heat loss calculations do not take into account the additional heat required for hot water demand and do not subtract heat gains such as solar gains, body heat and heat given off by running electrical appliances. Coincidentally these seem to mostly cancel out in our house. Heat demand for hot water can be 11 kWh/day on the coldest days (equivalent to 460W continuous). Heat gains from body heat may be ~140W, heat gains from electrical appliances ~240W, heat gains from heat lost from hot water system ~25% or 105W, solar gains may be as low as 30-40W. We can therefore add 460W - 115W = 345W of net heat demand for hot water and then subtract 140W, 240W & 40W = -75W. Which is really in the range of rounding errors in a heat loss calculation. We can therefore expect that the maximum heat demand measured by the heat pump heat meter should match the calculated heat loss value.

### Comparison with monitored heat demand

I have now had my heat pump running with detailed monitoring for five and half years and so can check the actual maximum heat demand that the heat pump has provided. 

See HeatpumpMonitor.org heat demand tool here: [https://heatpumpmonitor.org/heatloss?id=2](https://heatpumpmonitor.org/heatloss?id=2)

![midterrace_measured_heat_demand.png](images/heatloss/midterrace_measured_heat_demand.png)

**Results:**

- The maximum heat demand recorded of 3.4 kW over 24 hours was actually recorded on a relatively warm 7.5C day at the start of January 2024. As is often the case, this day was a day where we were re-heating the house as we had been away. 

- The highest cold weather heat demand was recorded on the 1st of December 2023, at 2.9 kW over 24 hours. It was -1C outside and the livingroom averaged 20C.

- There are a couple of other days around 0C & +1C where heat demand is fractionally higher at 3 to 3.1 kW.

- The coldest day recorded was -1.6C which had a suprisingly low heat demand of 2.5 kW. Other cold days around -1.4C had a heat demand of 2.6 kW.

- The central line crosses 3.4 kW at a DT of 21.4K corresponding to a design temperature of -1.4C. 

- We do see a wide range of values and this might suggest that it could be feasible to see heat requirements +-0.6 kW or from 2.8 kW up to 4.0 kW.

- Maximum output testing of my 5kW Ecodan during below freezing conditions suggests it should be able to maintain 4.2-4.5 kW net heat output during periods of heavy defrosting [5kW R410a Ecodan PUHZ-W50VHA2(-BS) maximum output testing](https://community.openenergymonitor.org/t/5kw-r410a-ecodan-puhz-w50vha2-bs-maximum-output-testing/24874).

### Choosing the right design flow temperature

Heat pump radiator systems are usually designed to operate at a design flow temperature of 45-50°C at the chosen design outside temperature, for example, -3°C. However, due to commonly overestimated heat loss calculations, the actual required design flow temperature or weather compensation curve setting is often much lower than the calculated design flow temperature. Consequently, systems that have had their weather compensation settings tuned after installation can often achieve higher SCOP performance results than initially expected.

To illustrate this with our house:

1. The radiator system I designed for our house would need to run at a design flow temperature of 52°C at the design outside temperature to deliver the overestimated heat loss of 7.5 kW. On paper, one might think that this design flow temperature is quite high and not conducive to cheap running costs. Using my [SCOP calculator](https://openenergymonitor.org/tools/SCOP.html), I estimate that my SCOP would have been 3.46 at this higher design flow temperature.

2. With our actual heat loss of 3.3 kW, with all of the more accurate input assumptions above, this same radiator system only needs a design flow temperature of 38°C. This actual setting has provided me with a space heating SCOP of 4.2-4.3. This SCOP would be even higher with the latest generation of heat pumps, possibly reaching 4.7.

3. Had I initially calculated an accurate heat loss of 3.3 kW and designed the radiator system to run at 50°C, I would have installed a smaller radiator system (or, in fact, would not have needed to upgrade the original radiator system). The performance of the system would have been lower, with a space heating SCOP of approximately 3.56.

**Important: If we start conducting accurate heat loss assessments but do not reconsider the general design flow temperature rule of thumb of 45-50°C, any performance gain from a better-matched heat pump will likely be undone by higher running flow temperatures. For space heating SCOPs of 4.2-4.7 with an \*accurate heat loss\*, choose a design flow temperature of no higher than 38°C.**
