## title: The original heating system
### published: 2018-1-3

*Updated: 29th November 2020*

Prior to replacement with the heat pump the original heating system was a multi-fuel stove with a back boiler connected to an 120 litre hot water tank (which also has an immersion heater) and 8x single panel radiators. The system did not really work, at least when we tried to fuel it with wood (it may well have been designed for coal). 

Initially I wanted to work out whether it made any sense to connect the heat pump to the existing radiator system, would we get anything useful out of it? or did we need to replace the lot? In the end we did replace the whole system. We installed new larger radiators, a new hot water cylinder and mostly new piping.

The following details my calculations for the heat output we might have expected with the old radiator system and as you will see it would not have been enough.

![existingheatingsystem.jpg](images/existingheatingsystem.jpg)

The radiators were all single panel standard radiators on 15mm pipe. Looking up the heat output of standard single panel radiators on screwfix (e.g [1000x600](https://www.screwfix.com/p/kudox-premium-type-11-single-panel-single-convector-radiator-white-600-x-1000mm/36126)) at deltaT 50K between the radiator and the room gives an idea of the heat output for each radiator dimension. The following table lists what I could work out from the screwfix ratings versus the heat loss from the room from the room-by-room heat loss calculation:


| **Room**   | **Heat loss** | **Radiator** | **Area**    | **Heat Output @ 50K** | **Heat/m2**   |
| ---------- | ------------- | ------------ | ----------- | --------------------- | ------------- |
| Diningroom | 898 W         | 1200x500x45  | 0.6 m2      | 1051 W                | 1752 W/m2     |
| Livingroom | 898 W         | 1400x400x45  | 0.56 m2     | 1011 W                | 1805 W/m2     |
| Kitchen    | 960 W         | 800x600x45   | 0.48 m2     | 821 W                 | 1710 W/m2     |
| Hallway    | 667 W         | 1200x600x45  | 0.72 m2     | 1231 W                | 1710 W/m2     |
| Bathroom   | 1323 W        | 800x600x45   | 0.48 m2     | 821 W                 | 1710 W/m2     |
| Bed1       | 386 W         | 1000x400x45  | 0.4 m2      | 722 W                 | 1805 W/m2     |
| Bed2       | 472 W         | 1000x400x45  | 0.4 m2      | 722 W                 | 1805 W/m2     |
| Study      | 487 W         | 1000x400x45  | 0.4 m2      | 722 W                 | 1805 W/m2     |
| **Total**  | **6091 W**    |              | **4.04 m2** | **7101W**             | **1758 W/m2** |
    
First of all, it's nice to see that the output of the radiator system at boiler temperatures (Flow temperature of ~70C) is well matched for the 6092W of heat loss at an outside temperature -3C and suggests that a previous heat loss calculation was done with similar building fabric u-values. The kitchen and bathroom are perhaps a bit undersized and other's oversized but overall there is enough output.

*The heat output values for the screwfix radiators are ~5% higher than the equivalent in the RHI radiator sizing guide (identified as type K1).*

**Heat output at heat pump flow temperatures**

The following equation give a good fit for the lookup table mentioned on the page Heat pump radiator design:

    Heat_output = Rated_Heat_Output x (Delta_T / Rated_Delta_T) ^ 1.3
    
Plugging the numbers in, we can workout the heat output at lower flow temperatures. Note that *Delta_T* here is the difference between the mean water temperature (MWT) of the radiator and the temperature of the room, so if the radiator is at 30C and the room 20C, Delta_T = 30C-20C = 10C.

    MWT 30C: Heat_output = 7101 W x (10K / 50K) ^ 1.3 = 876 W
    MWT 35C: Heat_output = 7101 W x (15K / 50K) ^ 1.3 = 1484 W
    MWT 40C: Heat_output = 7101 W x (20K / 50K) ^ 1.3 = 2158 W
    MWT 45C: Heat_output = 7101 W x (25K / 50K) ^ 1.3 = 2884 W

We can see that which ever way you look at it, the heat output is far below the heat loss of the house when its -3C outside. The next series of pages go into the eventual radiator system design that we went with in detail, we both switched to double panel convector’s and increased the total radiator area to achieve a higher heat output at the low temperatures that give good performance from a heat pump.

### Hot water cylinder

    Outside diameter: 490mm
    Outside height:   915mm
    Inside diameter:  440mm
    Inside height:    875mm
    Insulation:       25mm
    
Approximate volume taking into account dome top: 0.125 m3, density of water 1000 L/m3 suggests a tank capacity of ~125 Litres. Or checking common sizes on [coppercylinder.co.uk](https://www.coppercylinder.co.uk/900-36-x-450-18-direct-hot-water-cylinder-157-65-ex-vat) a 36x18 inch tank holds approximately 120 Litres of water.

The thermal conductivity of polyurethane foam is around 0.022 W/m.K, at 0.25mm thickness it yields a U-value of 0.88 W/K.m2. At a cylinder surface area of 0.667m2, a water temperature of 45C and a bathroom temperature of 22C. Heat would be lost at a rate of 13.5 Watts. The hot water pipe exiting the top of the cylinder was uninsulated which would have likely contributed to additional heat loss.

We replaced the original cylinder with a special heat pump cylinder with a large surface area coil and thicker insulation.

