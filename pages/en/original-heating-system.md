## title: The original heating system
### published: 2018-1-3

*Updated: July 2024*

Prior to replacement with the heat pump the original heating system was a multi-fuel stove with a back boiler connected to an 120 litre hot water tank (which also has an immersion heater) and 8x single panel radiators. The system did not really work, at least when we tried to fuel it with wood (it may well have been designed for coal). 

Initially I wanted to work out whether it made any sense to connect the heat pump to the existing radiator system, would we get anything useful out of it? or did we need to replace the lot? In the end we did replace the whole system. We installed new larger radiators, a new hot water cylinder and mostly new piping.

The following details my calculations for the heat output we might have expected with the old radiator system.

![existingheatingsystem.jpg](images/existingheatingsystem.jpg)

The radiators were all single panel standard radiators. The following table lists the rated output of each radiator at deltaT 50K between the radiator mean water temperature and the room. These ratings can usually be found on the product listings e.g [Screwfix K1 1000x600](https://www.screwfix.com/p/kudox-premium-type-11-single-panel-single-convector-radiator-white-600-x-1000mm/36126)


| **Room**   | **Radiator** | **Area**    | **Heat Output @ 50K** | **Heat/m2**   |
| ---------- | ------------ | ----------- | --------------------- | ------------- |
| Diningroom | 1200x500x45  | 0.6 m2      | 1051 W                | 1752 W/m2     |
| Livingroom | 1400x400x45  | 0.56 m2     | 1011 W                | 1805 W/m2     |
| Kitchen    | 800x600x45   | 0.48 m2     | 821 W                 | 1710 W/m2     |
| Hallway    | 1200x600x45  | 0.72 m2     | 1231 W                | 1710 W/m2     |
| Bathroom   | 800x600x45   | 0.48 m2     | 821 W                 | 1710 W/m2     |
| Bed1       | 1000x400x45  | 0.4 m2      | 722 W                 | 1805 W/m2     |
| Bed2       | 1000x400x45  | 0.4 m2      | 722 W                 | 1805 W/m2     |
| Study      | 1000x400x45  | 0.4 m2      | 722 W                 | 1805 W/m2     |
| **Total**  |              | **4.04 m2** | **7101W**             | **1758 W/m2** |

**Heat output at heat pump flow temperatures**

The following equations can be used to determine the heat output of the radiators at different water temperatures:

    Delta_T = Mean water temperature (MWT) - Room temperature
    Heat_output = Rated_Heat_Output x (Delta_T / Rated_Delta_T) ^ 1.3
    
If the radiator mean water temperature is 35C and the room 20C, Delta_T = 15C.

    MWT 35C: Heat_output = 7101 W x (15K / 50K) ^ 1.3 = 1484 W
    MWT 40C: Heat_output = 7101 W x (20K / 50K) ^ 1.3 = 2158 W
    MWT 45C: Heat_output = 7101 W x (25K / 50K) ^ 1.3 = 2884 W
    MWT 50C: Heat_output = 7101 W x (30K / 50K) ^ 1.3 = 3655 W
    MWT 55C: Heat_output = 7101 W x (35K / 50K) ^ 1.3 = 4466 W
    
My original 2017 heat loss calculation suggested a heat loss at design temperature of 6.1 kW and so I believed at the time that the existing radiator system would not work at all with the R410a Ecodan heat pump I planned on using, which could only reach a maximum temperature of 55C at subzero temperatures.

In reality we have never needed more than 3.1 kW from the heat pump over a 24 hour period during sub-zero conditions and I have since revised my heat loss calculation based on better input assumptions down to 3.3 kW at design temperature. The original radiator system should have been able to deliver this at a mean water temperature of 48C and heat pump flow temperature of 50C.

While the heat pump could certainly hit this flow temperature for short periods at sub zero temperatures and in-between defrosts. I wonder if it would have been able to sustain an average flow temperature of 50C.. it would have been a good test! 

I decided at the time to upgrade all the radiators and pipework, doubling the output capacity at a given water temperature to 15 kW @ DT50. This dropped the mean water temperature required from 48C to 36C (Flow 50C to 38C). 

Using the [SCOP calculator](https://openenergymonitor.org/tools/SCOP.html) tool, I estimate that dropping the design flow temperature from 50C to 38C increased space heating SCOP over the year from 3.56 to 4.25. My actual space heating SCOP does actually match the higher value! Though I do wonder if the SCOP tool is too optimistic in it's predicted SCOP for the higher 50C design flow temperature.

Our space heating demand has been 6500 kWh/year on average. A SCOP of 4.25 and unit cost of electric of 20 p/kWh costs £306/year. A SCOP of 3.56 would have cost £365/year. This saving of only £59/year or £1180 over 20 years would take a long time to payback the additional cost of the radiator upgrades unfortunately. Using the Ecodan datasheet COP values instead of the carnot COP equation increases this saving slightly to £69/year or £1394 over 20 years. It's likely that a radiator system would last 40 years and so savings could be twice this amount over the long term. 

It may arguably make sense if the existing radiator system is in good condition, well cleaned and sufficient in size to fall within the heat pump flow temperature range, to continue using the existing radiator system and then upgrade to a more efficient system at the next replacement point. An accurate heat loss is key to making this assessment! As my example above shows, my original calculation suggested that the original radiator system was significantly undersized, we have to deviate significantly from standard guidance to make that assessment.


### Original hot water cylinder

    Outside diameter: 490mm
    Outside height:   915mm
    Inside diameter:  440mm
    Inside height:    875mm
    Insulation:       25mm
    
Approximate volume taking into account dome top: 0.125 m3, density of water 1000 L/m3 suggests a tank capacity of ~125 Litres. Or checking common sizes on [coppercylinder.co.uk](https://www.coppercylinder.co.uk/900-36-x-450-18-direct-hot-water-cylinder-157-65-ex-vat) a 36x18 inch tank holds approximately 120 Litres of water.

The thermal conductivity of polyurethane foam is around 0.022 W/m.K, at 0.25mm thickness it yields a U-value of 0.88 W/K.m2. At a cylinder surface area of 0.667m2, a water temperature of 45C and a bathroom temperature of 22C. Heat would be lost at a rate of 13.5 Watts. The hot water pipe exiting the top of the cylinder was uninsulated which would have likely contributed to additional heat loss.

We replaced the original cylinder with a special heat pump cylinder with a large surface area coil and thicker insulation.

