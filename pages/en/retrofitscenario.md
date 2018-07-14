## title: Retrofit Scenario 1
### published: 2018-04-22

I’m interested in exploring a number of different measures including: 

- Insulation
- Draught proofing
- Improved glazing
- Heat pump heating system (with thermal storage for DSR)
- or Biomass pellet stove/boiler
- Reduction in internal temperature through better control & comfort requirements. 

I would like to work our rough costs for each measure and to what extent I could take a DIY/self-build approach.

I’m also aware from reading guidance by the sustainable traditional buildings alliance (STBA) that given that the house is of stone construction particular care is required to avoid issues with moisture.

**The following scenario is an attempt at a 'doing everything right' scenario. I have explored high standards for insulation, draught proofing and windows and doors. The result is near passivhaus standard.**

Looking again at the heat loss overview, the model suggests that the largest proportion of heat loss is through the walls, followed by infiltration and then windows. The walls loose twice as much heat than the windows.

<img style="border: 2px solid #ddd" src="images/9-overview.png">

    - Walls:            73 W/K, 35.8%
    - Infiltration:     46 W/K, 22.5%
    - Windows:          36 W/K, 17.6%
    - Floor             23 W/K, 11.3%
    - Thermal Bridging: 20 W/K, 9.8%
    - Roof               7 W/K, 3.4%

### External and Internal Wall Insulation

One option which is recommended for traditional stone walls would be to use a breathable lime and wood-fibre or cork board based insulation system such as this Ty Mawr external wall insulation system [https://www.lime.org.uk/applications/external-wall-insulation-system/expanded-cork-insulation-system.html](https://www.lime.org.uk/applications/external-wall-insulation-system/expanded-cork-insulation-system.html). 

The [responsible retrofit wheel](http://www.responsible-retrofit.org/wheel/) by the STBA highlights the importance of being aware of potential issues with trapping/accumulating moisture in walls being externally insulated. Using vapour permeable materials such as wood fibre insulation helps to reduce this risk but that its also important to ensure that any existing moisture or dampness issues are resolved before starting any insulation work.

<img src="images/tymawr-woodfibre.jpg" style="width:500px"/>

**Thermal performance:**<br>The Homeatherm EnergiePlus comfort woodfibre insulation boards have a thermal conductivity of 0.039 W/mK for boards of thickness 80mm and above. The U-value of a particular thickness of insulation board is calculated by dividing the thermal conductivity by the thickness in meters. For example 0.039 W/mK / 0.120m = 0.325 W/K.m2

Adding 120mm of wood fibre board with a U-value of 0.325 W/K.m2 to an uninsulated stone wall with plaster on hard and a U-value of 1.7 W/K.m2 results in a combined U-value of 0.273 W/K.m2. Very close to the suggested U-value of 0.3 W/K.m2 given for the Ty-Mawr external wall insulation system. This is a rough calculation, I haven’t taken into account the effect of the external render layer and there's a fair bit of uncertainty in the stone wall U-value as discussed before.

**120mm wood fibre insulation:**<br>
If all external walls where insulated with 120mm of wood fibre insulation, running the U-value of 0.273 W/K.m2 through the model suggests the following reduction in fabric heat loss:

    Fabric heat loss:       143 W/K (-61 W/k)
    
**140mm wood fibre insulation:**<br>
Increasing the insulation thickness slightly to 140mm results in a combined U-value of 0.240 W/K.m2:

    Fabric heat loss:       142 W/K (-62 W/k)
    
**240mm wood fibre insulation**<br>
Increasing the insulation thickness to 240mm, almost super-insulation levels! results in a combined U-value of 0.148 W/K.m2:

    Fabric heat loss:       138 W/K (-66 W/K)

**Exploring costs:**<br>
The total net internal wall area associated with external walls calculated in the model is 42.7 m2.
The total net external wall area is quite a bit higher than this at 54.8 m2 (18.7 m2 in the front and 15.5+13.6+7.0 = 36.1 m2 on the back). Using the costs as presented on the ty mawr website suggests a basic material cost converted to cost per m2 of:

- REABILITA CAL REBOCO - Render / Tile Bedding/Grouting: £5.26/m2
- Adhere Vit ecoCork - NHL based adhesive mortar: £2.37/m2
- Homatherm Energie:Plus:Comfort (T&G) 120mm - 1325mm x 615mm: £39.86/m2
- 175mm Masonry Fixings per box: £3.25/m2
- Ty-Mawr Render Mesh: £1.05/m2
- REABILITA Finishing Render/Plaster: £1.72/m2
- Beeck's primer: £0.28/m2
- Beeck's masonry paint & etching fluid ?

Which all adds up to a total of £53.79/m2 and so a basic material cost of £2948 ex VAT for 54.8 m2 external wall insulation. I haven’t yet tried to include the costs of detailing around the openings, eaves, ground or modifications to gutters etc. Doubling up the 120mm thick insulation boards to 240mm should raise the cost by another £39.86/m2 to ~£93.65/m2 and so a basic material cost of £5132.02 ex VAT.

**Useful links:**

- https://www.lime.org.uk/applications/external-wall-insulation-system/expanded-cork-insulation-system.html
- http://www.responsible-retrofit.org/wheel
- https://www.natural-building.co.uk
- https://www.backtoearth.co.uk/blogs/how-to-videos

    
### Air-tightness

<img src="images/blowerdoor.jpg" style="width:250px; float:right; margin-left:20px" title="By Kmcrady [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], from Wikimedia Commons">

The assessment currently suggests that the effective air change rate is on average 0.74 air changes per hour (ACH), with a minimum of 0.66 ACH in summer and maximum of 0.84 ACH in winter.

If we removed the open flue and draught proofed 100% percent of windows and doors, the model suggests that this would reduce the effective air change rate to 0.64 ACH. Which would reduce the infiltration heat loss from 46 W/K down to 39 W/K (-7 W/K).

An air-tightness test tests the air-tightness of the building fabric, it does not include designed ventilation such as MVHR. When a test is performed the ventilation system is closed and sealed. The following standards give an idea of the level of air-tightness performance that is achievable:

- AECB Silver Standard with MEV n50 (max): 3.0 air changes per hour @ 50 Pa.
- AECB Silver Standard with MVHR n50 (max): 1.5 air changes per hour @ 50 Pa.
- Passivhaus retrofit EnerPHit n50 (max): 1.0 air changes per hour @ 50 Pa.
- Passivhaus airtightness n50 (max): 0.6 air changes per hour @ 50 Pa.

SAP and the UK standard measures Air Permeability in m3/hr/m2@50Pa (q50) while passivhaus and the AECB Silver Standard use air changes per hour (n50). The SAP calculation converts the q50 value to an air change per hour value by multiplying by the building surface area divided by the volume. It then uses the q50/20 rule of thumb in order to calculate the background ventilation rate.

If we aimed for the AECB Silver Standard with MVHR of 1.5 ACH the divide by 20 rule would suggest a resulting background ventilation rate of 0.075 ACH. 

Converting the n50 value of 1.5 ACH to q50 as used by SAP: 1.5 ACH x 185.9 m3 / 216.7 m2 = 1.3 m3/hr/m2@50Pa.

Achieving 1.5 air changes per hour @ 50 Pa is an advanced level of air-tightness that would likely require a whole range of air-tightness measures with careful detailing including the use of membranes and tapes and would likely only be achievable alongside other measures such as replacing windows and doors with high performance designs.

**Ventilation:**<br>
[Passivhaus ventilation: It’s not a lot of hot air](https://www.aecb.net/publications/passivhaus-ventilation-its-not-a-lot-of-hot-air/) mentions that a ventilation system of a passivhaus must be capable of complying with standard DIN1946 and therefore capable of supplying at least 30m3 per person per hour. Later in the article in relation to the use of balanced ventilation it mentions residential passivhaus buildings with an air supply of 23.1 m3/person per hour is more than adequate in practice, especially if materials have low TVOC emissions.

The volume of our house is 185.9 m3 and external surface area including party walls is 216.7 m2. With an occupancy of 2, 30m3 per person/hour corresponds to an ventilation air change rate requirement of 0.32 ACH (or 0.25ACH at the lower value). Our house could however house up to 4 people which would then require 0.64 ACH or 0.5ACH at the lower rate.

This agrees well with the values mentioned in [Pete Warm: 10 most common PHPP mistakes](http://www.peterwarm.co.uk/10-most-common-phpp-mistakes/) that PHPP generally assumes a ventilation rate of 0.3 ACH for German homes, but requires a likely higher 0.5 ACH for UK homes which are generally smaller and more densely occupied.
    
**Combined Infiltration and Ventilation:**<br>

Entering a q50 of 1.3 m3/hr/m2@50Pa and a MVHR ventilation rate of 0.4 ACH into the SAP model reduces infiltration heat loss from 46 W/K to 5 W/K but introduces a ventilation loss of 11 W/K. This results in a net heat loss of 16 W/K and a reduction of 30 W/K.

    Fabric heat loss (Infiltration & Ventilation):       174 W/K (-30 W/k)

Combining this infiltration and ventilation level (-30 W/K) with a 120mm wood-fibre external wall insulation system (-61 W/K), results in a fabric heat loss rate of 114 W/K.

    Fabric heat loss (EWI, Infiltration & Ventilation):  114 W/K (-90 W/k)

**Useful links:**
    
- http://www.peterwarm.co.uk/a-guide-to-volume-calculations-for-passivhaus-air-tightness-testing-and-the-difference-with-the-uk-method/
- http://www.peterwarm.co.uk/10-most-common-phpp-mistakes/
- http://www.passivhaus.org.uk/filelibrary/Primers/Passivhaus-Airtightness-Guide.pdf
- http://www.passivhaustrust.org.uk/UserFiles/File/Melissa%20Taylor-%20Ecobuild%20EnerPHit%20presentation.pdf
- http://www.passivhaustrust.org.uk/UserFiles/File/Technical%20Papers/ROT/How%20to%20build%20a%20Passivhaus_Chapters%201%20to%204.pdf
- https://www.aecb.net/carbonlite/building-certification/aecb-silver-standard
- [Discussion on n50/20 rule of thumb](http://eprints.leedsbeckett.ac.uk/2109/3/Johnston%20%2526%20Stafford%20accepted%20Dec%202015.pdf)
- https://www.aecb.net/publications/passivhaus-ventilation-its-not-a-lot-of-hot-air/

### High performance windows and doors

Our third largest area of heat loss is through windows and doors. The house currently has 6mm double glazing likely air-filled without low-E glass which would result in a U-value of 3.1 W/K.m2. Advanced double and triple glazed windows can do much better than this both in terms of glazing performance and the frame.

<img src="images/gbs_windows.jpg" style="width:186px; float:right; margin-left:20px">

Our total window area is: 9.8 m2, 5.2 m2 south facing, 4.6 m2 north & west facing. Researching guide line costs I came across the following baseline guides:

- [Build It](https://www.self-build.co.uk/is-triple-glazing-worth-money/): Double: £150/m2, Triple: £235/m2.
- [The Eco Experts](https://www.theecoexperts.co.uk/triple-glazing-guide-costs) Woodgrain uPVC: £261/m2 Double, Triple: £320/m2

An initial estimate based on the Eco Experts figure of £320/m2 would suggest £3200 for 10m2.

I also had an outline quote from the [GreenBuildingStore](https://www.greenbuildingstore.co.uk) that came to £2965 inc VAT for the windows and £2193 inc VAT for the doors (not including delivery and fitting).

**Advanced triple glazing (green build store 0.85W/K.m2)**

Looking at the effect of triple glazing in isolation starting from our current baseline, advanced triple glazing would reduce glazing heat loss from 36 W/K to 11 W/K:

    Fabric heat loss (Windows & Doors only):         179 W/K (-25 W/K)

Combining with air-tightness work and external wall insulation measures above:

    Fabric heat loss (combined measures):            88 W/K (-116 W/K)
    
### Thermal bridging
    
At this point its also likely with careful detailing that thermal bridging has been reduced significantly. Reducing the y-value from 0.15 to 0.075 would result in the following heat loss and space heating demand:

    Fabric heat loss (combined measures):            78 W/K (-10 W/K)
    
There is however significant thermal bridge potential to the uninsulated walls of the houses on either side as it is a terraced house, I would like to look into this in more detail.
    
### Loft insulation

Our loft is currently insulated to 200mm although its evenness and completeness is inconsistent. If we where to insulate it further to 300mm, ensure the insulation level is consistent and use loft insulation stilts to create storage space we could expect to achieve a U-value of around 0.12 W/K.m2. Which would reduce the total heat loss rate by about 2.3 W/K. A small improvement but probably worth doing if only to ensure the insulation is consistently applied.

- [https://www.diy.com/departments/diall-loft-storage-stilt/252222_BQ.prd](https://www.diy.com/departments/diall-loft-storage-stilt/252222_BQ.prd)

### Floor insulation

The floors are the remaining building fabric item and perhaps one of the more complicated elements to improve as it would require major excavation works and therefore be very disruptive! Insulating the floor in the kitchen in particular would make a large difference to comfort as it's a cold slate tile floor. Ideally we would combine insulating the floors with installing underfloor heating to be used along side a heat pump.

The Domestic Heating Design Guide U-value guide for floors suggest a U-value of 0.23 W/m2.K for 100mm of insulation with two edges exposed at a distance of between 6-8m. Achieving this throughout would reduce heat loss through the floor from 23 W/K to 9 W/K a reduction of 14 W/K.

### Building fabric retrofit overview

<img style="border: 2px solid #ddd" src="images/beforeafter.png">

    - Walls:            73 W/K -> 12 W/K: -61 W/K
    - Infiltration:     46 W/K -> 16 W/K: -30 W/K
    - Windows:          36 W/K -> 11 W/K: -25 W/K
    - Floor             23 W/K ->  9 W/K: -14 W/K
    - Thermal Bridging: 20 W/K -> 10 W/K: -10 W/K
    - Roof               7 W/K ->  5 W/K:  -2 W/K

Space heating demand: 1351 kWh, 3.7 kWh/d, 18 kWh/m2.a

I imagine this wont be achievable in practice due to thermal bridging to neighbouring properties and likely difficulty in achieving air-tightness, perhaps someone with more experience of the practical reality of retrofit would know better.

### Heating system and water heating

The final stage of my proposed ideal case retrofit is to remove the wood stove and electric room heaters and install a heat pump for both space and hot water and also be more efficient in our use of water, I would also likely install solar but have not included this in the overview below:

<img style="border: 2px solid #ddd" src="images/finaloverview.png">
