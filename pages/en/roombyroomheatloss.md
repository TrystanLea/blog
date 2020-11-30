## title: Room by room heat loss calculation
### published: 2017-12-29

**Note: This post was originally written prior to the retrofit scenario exploring the full potential of high performance building fabric, the measures part needs updating to cover the broad range of measures included in the scenario and the U-values need updating to match those used in the MyHomeEnergyPlanner assessment.**

To meet the MCS heatpump standard [MIS_3005](http://www.microgenerationcertification.org/images/MIS_3005_Issue-5.0_-Final_17.04.28.pdf), a heatpump needs to be sized correctly to meet the heat demand of the building. 

The standard states that a heat loss calculation should be performed on the building in accordance with standard BS EN 12831:2003. It also specifies the internal and external temperatures that can be used as:

<table>
<tr>
  <td>
    <b>Table 1: Internal temperatures BS EN 12831:2003</b>
    <img src="images/table1.png" />
  </td>
  <td>
    <b>Table 2: External temperatures</b>
    <img src="images/table2.png"/>
  </td>
</tr>
</table>

If column B is selected no uplift factor for intermittent heating is required.

The external temperature used for solid floors in contact with the ground should be the average external air temperature.

The external temperature is "decreased by 0.6C for every 100m by which the height above sea  level of the site exceeds that of the location in the table."

The heatpump needs to meet 100% of the calculated design space heating power requirement and should not include supplementary heat supplied by a backup electric heater. Where the heatpump is combined with another heating system it needs to be integrated into a single control system and the combined heat output needs to meet 100% of the space heating demand. The second system cannot be a standard wood stove as these cant cant be "integrated into a single control system". The second system cannot be another electric heater either.

### MCS Website Heat Pump Reference Materials

The MCS Website provides a number of useful spreadsheets and documents to guide heatpump system design, including the "MCS Heat Pump Calculator" that implements the EN12831 heat loss calculation standard.

The EN12831 standard is a room by room heat loss calculation which differs from SAP 2012 which implements a dwelling wide heat loss calculation. The EN12831 standard takes into account the U-values of internal walls and the heat loss or gain rate through each wall into the rooms either side. This is needed in order to work out the heat emitter sizing in each room so that the room temperatures are met. Without a room by room heat loss calculation it could be easy to under size radiators in say the living room, perhaps over sizing the radiator in the hall. The living room would then struggle to meet the target temperatures while the hall would be too hot.

The following documents my attempt at entering our house into the MCS Heat Pump Calculator spreadsheet discussing the results, both their implications for a heatpump system design and how the results compare to the MyHomeEnergyPlanner home energy assessment.

#### 1. MCS Heat Pump Calculator overview

The MCS Heat Pump Calculator is divided into a number of sheets including:

- **Scope:** Basic description of what the calculator is
- **Design Details:** Heat pump size, type, house type, number of bedrooms, design flow temperature, global U-values for building fabric elements, room summary.
- **U Value Calculator:** As described, plus further reference to fabric element U-values.
- **Design Tables:** Degree days table for different UK regions, design room temperatures and ventilation rates.
- **Rooms 1 to 15:** Individual room heat loss calculation sheets.
- **MCS020:** Air-source heat pump sound power level standard
- **GL Sizing:** Ground loop sizing for ground source heat pumps
- **HP Rad sizing:** Room by room radiator sizing calculator
- **UFH Guide:** Underfloor heating
- Graphs
- Compliance Certificate v1.2
- CC v1.2 Guidance
- Compliance Certificate v2.0
- CC v2.0 Guidance
- Rooms 16 to 30
- Version

#### 2. Design Details Sheet

Data entered: 

- Postcode and altitude which the sheet uses to calculate the house location, degree days and outside design temp. 
- Amount of bedrooms used to calculate hot water demand
- Design Flow Temperature
- Heat pump model details

I then selected or set the following U-values, attempting to use the closes U-values provided by the calculator where possible. Some of the U-values differ from the MyHomeEnergyPlanner assessment as I've tried to use the default U-values provided by the heat loss calculator for this initial assessment:

- Windows: 2.8 W/K.m2 instead of 3.1 W/K.m2
- Door: 3.4 W/K.m2 instead of 2.8 W/K.m2
- Walls: 2.23 W/K.m2 instead of 2.1 W/K.m2
- Party Wall: 0.5 W/K.m2 instead of 0.0 W/K.m2
- Loft: 0.18 W/K.m2 instead of 0.21 W/K.m2

![heatpumpcalc_uvalues.png](images/heatpumpcalc_uvalues.png)

#### 3. Room heat loss calculation

Each room can then be entered in order to calculate the heat loss for each room. Here is an example of our livingroom/diningroom the largest and warmest room in the house.

![heatloss_livingroom.png](images/heatloss_livingroom.png)

The calculation suggests that the room will require a maximum of 1796 Watts to maintain the room temperature at 21C when the outside temperature is -3C and the two properties either side are unoccupied. This value does not include a 20% uplift factor for intermittent heating and therefore assumes the heat pump is running continuously when the temperature is -3C.

Repeating the above for all the other rooms in the house I get finally to this summary shown on the Design Details sheet:

![designdetails2.png](images/designdetails2.png)

With this information its now possible to design the heat emitters in each room to meet the heat input requirements.

Its interesting to note at this point that the total space heating demand calculated is 11,762 kWh which is very close to the space heating demand calculated using MyHomeEnergyPlanner 11,104 kWh, a difference of 5.5%.

#### 4. Modelling effect of insulating external walls to 0.3 W/K.m2

In the MyHomeEnergyPlanner assessment I looked at the option of insulating the walls in order to reduce the space heating requirement. If I apply the same insulated U-value of 0.3 W/K.m2 to the external walls in the heat pump calculator I get the following results (6.5% difference to MyHomeEnergyPlanner result).

There is a 31% reduction in peak load and a 38% reduction in total space heating requirement.

![designdetails3.png](images/designdetails3.png)

#### 5. Modelling effect of a lower target temperature

Re running the calculation with the original U-values but with a reduced target temperature I get:

![designdetails4.png](images/designdetails4.png)

**Note**

I found that I needed to override or manually set a number of locked cells in order to represent the rooms properly.<br>I made a list of the changes made as I went along:

- Ground floor U-value set manually to 0.38
- Upper floor U-value set to 1.73 (internal floor)
- Livingroom: Internal wall 1 is a party wall bordering a potentially unheated space with a U-value of 0.5
- Livingroom: Roof is an internal element with a 18C space above ( DeltaT set to 3 )
- Hall: Roof is an internal element with a 18C space above, DeltaT set to 0
- Hall: Internal wall 1 is a party wall bordering a potentially unheated space with a U-value of 0.5
- Kitchen: Roof is an internal element with a 22C space above, DeltaT set to -1
- Kitchen: Internal wall 1 is a party wall bordering a potentially unheated space with a U-value of 0.5
- Kitchen: Floor set to U-value 0.9
- Bedroom 1: Floor is an internal element with a 21C space below, DeltaT set to -3
- Bedroom 1: Internal wall 1 is a party wall bordering a potentially unheated space with a U-value of 0.5
- Bedroom 2: Floor is an internal element with a 21C space below, DeltaT set to -3
- Bedroom 2: Internal wall 1 is a party wall bordering a potentially unheated space with a U-value of 0.5
- Study: Floor is an internal element with a 18C space below, DeltaT set to 3
- Study: Internal wall 3 is a party wall bordering a potentially unheated space with a U-value of 0.5
- Landing: Internal wall 3 is a party wall bordering a potentially unheated space with a U-value of 0.5
- Bathroom: Floor is an internal element with a 18C space below, DeltaT set to -4
- Bathroom: Internal wall 2 is a party wall bordering a potentially unheated space with a U-value of 0.5

Apart from these changes, I used the calculated deltaT and internally referenced U-values as provided by the spreadsheet.
