## title: Current heating system
### published: 2018-1-3

The existing heating system is a multi-fuel stove with a back boiler connected to an 120 litre hot water tank (which also has an immersion heater) and 8x single panel radiators.

![existingheatingsystem.jpg](images/existingheatingsystem.jpg)

### Radiators

Radiators by room (All single panel standard radiators on 15mm pipe):

    Diningroom    1200x500x45
    Livingroom    1400x400x45
    Kitchen        800x600x45
    Hallway       1200x600x45
    Bathroom       800x600x45
    Bed1          1000x400x45
    Bed2          1000x400x45
    Study         1000x400x45

    (1.2×0.5)+(1.4×0.4)+(0.8×0.6)+(1.2×0.6)+(0.8×0.6)+(1.0×0.4)+(1.0×0.4)+(1.0×0.4) = 4.04m2
    
Looking up the heat output of standard single panel radiators on screwfix (e.g [1000x600](https://www.screwfix.com/p/kudox-premium-type-11-single-panel-single-convector-radiator-white-600-x-1000mm/36126)) at deltaT 50K between the radiator and the room gives an idea of the heat output of each radiator dimention:

Height 600mm:

    1400x600 (0.84) = 1436W = 1710 W/m2
    1200x600 (0.72) = 1231W = 1710 W/m2
    1000x600 (0.60) = 1026W = 1710 W/m2
     800x600 (0.48) =  821W = 1710 W/m2

Height 500mm:

    1200x500 (0.60) = 1051W = 1752 W/m2
    1000x500 (0.50) =  876W = 1752 W/m2
    
Height 400mm:

    1200x400 (0.48) =  866W = 1804 W/m2
    1000x400 (0.40) =  722W = 1805 W/m2
    
The total output of the existing radiator system at DeltaT 50K is, in the order of rooms above (*estimated):

    1051W + 1010W* + 821W + 1231W + 821W + 722W + 722W + 722W = 7100W
    
Or we could take a central figure for heat output per m2 of around 1750 W/m2 and multiply by the total radiator area of 4.04m2 as calculated above, giving 7070W. Its nice to see that the output of the existing radiator system is well matched for the 6092W of heat loss at an outside temperature -3C and suggests that a previous heat loss calculation was done with similar building fabric u-values.

The heat loss and heat pump sizing spreadsheet described in the post on 'Room by room heat loss' has a useful section on radiator sizing. With suggested heat output at both deltaT 50K and for heat pump systems with lower water temperatures.

The heat output values for kudox radiators above are about 5% higher than those provided for the equivalent single panel radiators, identified as type K1 in the heatpump radiator sizing sheet at deltaT 50K.

**Room by room heat loss comparison**

Comparing the room by room heat loss calculation to the radiator output in each room we can see that apart from the Kitchen and Bathroom all the radiators have excess output. The hall and landing radiator will likely provide some heat to the bathroom as the bathroom is at the top of the stairs and the living/dining room door through to the kitchen is often open.

![designdetails2.png](images/designdetails2.png)

| Room | Heat loss | Radiator Output @50K |
|---------|-------------------|
| Living & Dining room | 1796W | 2061W |
| Hall & Landing | 403+264 = 667W | 1231W |
| Kitchen | 960W | 821W |
| Bedroom 1 | 386W | 722W
| Bedroom 2 | 472W | 722W
| Study | 487W | 722W
| Bathroom | 1323W | 821W |

### Hot water cylinder

    Outside diameter: 490mm
    Outside height:   915mm
    Inside diameter:  440mm
    Inside height:    875mm
    Insulation:       25mm
    
Approximate volume taking into account dome top: 0.125 m3, density of water 1000 L/m3 suggests a tank capacity of ~125 Litres. Or checking common sizes on [coppercylinder.co.uk](https://www.coppercylinder.co.uk/900-36-x-450-18-direct-hot-water-cylinder-157-65-ex-vat) a 36x18 inch tank holds approximately 120 Litres of water.

The thermal conductivity of polyurethane foam is around 0.022 W/m.K, at 0.25mm thickness it yields a U-value of 0.88 W/K.m2. At a cylinder surface area of 0.667m2, a water temperature of 45C and a bathroom temperature of 22C. Heat would be lost at a rate of 13.5 Watts. The hot water pipe exiting the top of the cylinder is uninsulated which is likely to contribute additional heat loss.

