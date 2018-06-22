## title: Heatpump radiator circuit design
### published: 2018-1-4

**Note: This post was originally written prior to the retrofit scenario exploring the full potential of high performance building fabric and needs to be updated with heating system sizing that reflects low heat requirements if these standards where achieved.**

Heat pumps have higher performance at low flow temperatures. However the heat output from radiators is greatly reduced at lower water temperatures and so to achieve an efficient system it is usually the case that the radiator area in each room needs to be increased.

When you reduce the mean water temperature of a radiator its heat output does not reduce linearly. The heat output at a Delta_T of 25K (half the standard test Delta_T of 50K) is less than half of the heat output given at 50K. The heat output given by a radiator at different values of Delta_T is usually determined using a correction factor table:

| Delta_T | Correction Factor |
|---------|-------------------|
| 20      | 0.3               |
| 25      | 0.41              |
| 30      | 0.52              |
| 35      | 0.63              |
| 40      | 0.75              |
| 45      | 0.87              |
| 50      | 1                 |

*Correction factor's from [Heatpumps for the home by John Cantor](http://www.heatpumps.co.uk/HeatPumpBook.htm) taken from manufacturer's data.

To determine the correction factor at smaller increments of Delta_T the following equation gives a good fit to the above data:

    Correction Factor = (Delta_T / Rated_Delta_T) ^ 1.3
    Heat_output = Rated_Heat_Output x (Delta_T / Rated_Delta_T) ^ 1.3
    
The heat output of a radiator is determined by its mean water temperature (MWT). Which should be the average temperature across the radiator surface. Its important to make the distinction between the flow and return temperatures coming out or in to a heatpump and the mean water temperature of the radiator which will likely be somewhere in the middle of the two.

For example a heatpump producing an outlet/flow temperature of 35C combined with a heat emitter system that results in an inlet/return temperature of 30C, is likely to result in a radiator mean water temperature of (35+30)/2 = 32.5C.

Going back to our house and the existing radiator system I can now estimate what the heat output would be at typical heat pump flow temperatures, although 35C is prefered as it gives a higher COP.
Entering the heat output at DeltaT 50K in the above equation and calculating the output for a range of MWT I get:

    Heat_output = 1750W/m2 x (Delta_T / 50) ^ 1.3

    Heat output at flow 35C and MWT 32.5C (20C room) = 289 W/m2 x 4.04 m2 = 1168 W
    Heat output at flow 40C and MWT 37.5C (20C room) = 447 W/m2 x 4.04 m2 = 1806 W
    Heat output at flow 45C and MWT 42.5C (20C room) = 620 W/m2 x 4.04 m2 = 2505 W

The heat output at the prefered heatpump flow temperature is 83% less than the heat output at a deltaT of 50K, if we where to use single panel radiators and a design flow temperature of 35C we would need 6092W / 1168W = 5.2x the radiator area!

With a performance hit by increasing the flow temperature we could potentially reduce this to 3.4x or 2.4x but that would be far from an ideal situation.

### Upgrading to double panel convector radiators

A double panel convector such as a standard screwfix kudox double panel, double convector [1000x600](https://www.screwfix.com/p/kudox-premium-type-22-double-panel-double-convector-radiator-white-600-x-1000mm/65888) has a rated output of 1788W (2980 W/m2), 1.74x the heat output of an equivalent dimentioned single panel convector.

    Heat output at flow 35C and MWT 32.5C (20C room) = 492 W/m2 x 4.04 m2 = 1988 W
    Heat output at flow 40C and MWT 37.5C (20C room) = 761 W/m2 x 4.04 m2 = 3074 W
    Heat output at flow 45C and MWT 42.5C (20C room) = 1055 W/m2 x 4.04 m2 = 4262 W
    
If we where to use double panel radiators and a design flow temperature of 35C we would need 6092W / 1988W = 3.1x the radiator area at 35C, 2.0x at 40C or 1.4x at 45C.

The better alternative to larger radiators would of course be to reduce the heat input requirement with insulation, better glazing and air-tightness - to be explored further.

![designdetails2.png](images/designdetails2.png)

![ecodan_performance.png](images/ecodan_performance.png)

Proposed dimentions of new double panel radiators:

| Room | Radiator Size | @50K | Flow:35C | Flow:40C | Flow:45C | Heat loss |
| --- | --- | --- | --- | --- | --- | --- |
| Diningroom | 1400x600 | 2503W | 413W | 639W | 886W | 898W |
| Livingroom | 1400x600 | 2503W | 413W | 639W | 886W | 898W |
| Kitchen | 800x600 | 1430W | 235W | 365W | 506W | 960W |
| Hallway | 1200x600 | 2146W | 354W | 548W | 760W | 667W
| Bathroom | 800x600 | 1430W | 235W | 365W | 506W | 1323W
| Bed1 | 1000x400 | 1273W | 210W | 325W | 450W | 386W |
| Bed2 | 1000x400 | 1273W | 210W | 325W | 450W | 472W |
| Study | 1000x400 | 1273W | 210W | 325W | 450W | 487W |
| Total |    |    | 2280W | 3531W | 4894W | 6092W |
