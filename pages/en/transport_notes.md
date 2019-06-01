## title: Transport Notes
### published: 2019-05-08

Research notes on zero carbon or lower carbon transport, WORK IN PROGRESS.

In order to explore the energy consumption implications of total travel distance, modal shifts and electrification in the transport sector, the ZeroCarbonBritain scenario uses a transport model that starts by looking at how we travel today using available UK Government statistics before then modelling these changes to suggest a future scenario. The work below attempts to replicate and cross check the ZCB transport model in order to inform the 2019 update.

For passenger transport the ZCB model considers: Walking, Pedal Cycles, Electric Bikes & Scooters, Rail, Bus/Coach, Domestic Aviation, Motorbikes & Mopeds, Cars and Vans. International aviation and shipping is treated separately as aggregate fuel quantities.

The following UK Government statistics tables make it possible to build an overview of transport energy consumption, km travelled per person and per vehicle and therefore vehicle economy and load factors of each transport mode and are used in the modal summaries below.

- [GOV.UK Transport Statistics Great Britain](https://www.gov.uk/government/statistics/transport-statistics-great-britain-2018)
  - tsgb-2018/Modal/tsgb0101.ods provides modal passenger km travelled. [Ref 1]
  - tsgb-2018/Roads and traffic/tra0101.ods provides road vehicle km travelled. [Ref 2]
<br><br>
- [GOV.UK Energy consumption in the UK](https://www.gov.uk/government/statistics/energy-consumption-in-the-uk)
  - ECUK_Tables\_2018_corrections.xlsx Table 2.02 provides road transport energy consumption by vehicle type. [Ref 3]
  - ECUK_Tables\_2018_corrections.xlsx Table 2.01 provides a source for total rail energy consumption. [Ref 4]

\* 2016 is the most recent year for which energy and travel distances are available.<br>
\* The road transport energy consumption table 2.02 does not allocate biofuels and LPG per vehicle type and so a small adjustment is applied to take this into account, equal to a 3.55% increase on the stated per vehicle energy consumption.<br>
\* The per vehicle road transport energy consumption table 2.02 is also given in million tonnes of fuel rather than million tons of oil equivalent. A conversion of 12952 kWh/ton petrol, 12576 kWh/ton diesel and 11630 kWh/ton oil equivalent is used (see calculation in appendix), cross referencing the result with table 2.01 shows much closer correlation.

In addition to the summaries of the current state of transport in the UK, the sections below explore the potential impact of electrification and load factor on each mode. Examples are also given of conventional and electrified vehicles. These separate analyses are then combined at the end into an overall transport model that enables the exploration of changes in total distance travelled and modal shifts in addition to electrification and vehicle efficiency improvements.

## Cars, Vans and Taxis

666.5 bn passenger km [1] and 404.8 bn vehicle km [2] were travelled by cars, vans and taxis in 2016 consuming 301.16 TWh of energy [3]. A per person economy of 0.452 kWh/p.km and per vehicle economy of 0.744 kWh/v.km. The average occupancy of cars in the UK is 1.65 based on passenger km divided by vehicle km. At 50/50 petrol/diesel the per vehicle economy works out to 39 MPG, CO2 emissions: 182 gCO2/v.km, 110 gCO2/p.km, 292 gCO2/v.mile, 177 gCO2/p.mile.

<table>
<tr>
<td style="width:65%">

<p><b>Nissan Leaf 24 kWh</b></p>
<ul>
<li>WLTP Range: 124 miles</li>
<li>Real world range: 99 miles, Source: <a href="https://www.nextgreencar.com/view-car/49677/nissan-leaf-electric-car-acenta-24kwh-auto-electric-(av-uk-mix)/">Next Green Car</a>
<li>North Wales range: 80-90 miles</li>
<li>Real world kWh: 19 kWh/100km (0.19 kWh/km) Source: <a href="https://www.nextgreencar.com/view-car/49677/nissan-leaf-electric-car-acenta-24kwh-auto-electric-(av-uk-mix)/">Next Green Car</a></li>
<li>North Wales kWh: 22 kWh usable capacity / 136 km = 0.16 kWh/km</li>
<li>Max kWh per passenger: 0.032 kWh/p.km</li>
<li>Battery capacity: 24 kWh</li>
<li>Drag coefficient: <a href="https://www.researchgate.net/figure/Nissan-Leaf-specifications-39_tbl1_232708182">0.29</a></li>
<li>Curb weight: 1475 kg (295 kg per person at max occupancy)</li>
</ul>

</td>
<td>
<img src="images/transport/catchargingstation.jpg">
<i>Nissan Leaf charging at CAT</i>
</td>
</tr>

<tr>
<td style="width:65%">

<p><b>Hyundai Ioniq Electric</b></p>
<ul>
<li>WLTP Range: 174 miles</li>
<li>Real world range: 140 miles, Source: <a href="https://www.nextgreencar.com/view-car/60980/hyundai-ioniq-electric-premium-se-auto-electric-(av-uk-mix)/">Next Green Car</a></li>
<li>Real world kWh: 14 kWh/100km (0.14 kWh/km)</li>
<li>Max kWh per passenger: 0.028 kWh/p.km</li>
<li>Battery capacity: 28 kWh</li>
<li>Drag coefficient: 0.24</li>
</ul>

<p><b>Hyundai Ioniq Hybrid</b></p>
<ul>
<li>WLTP MPG: 78.5 MPG</li>
<li>Real world MPG: 55.0 MPG, Source: <a href="https://www.nextgreencar.com/view-car/60791/hyundai-ioniq-hybrid-1.6-gdi-se-dct-petrol-hybrid-semi-automatic-6-speed/">Next Green Car</a></li>
<li>Real world kWh: 0.497 kWh/km based on 55 MPG</li>
<li>Max kWh per passenger: 0.1 kWh/p.km</li>
<li>Engine efficiency: ~28% compared with electric</li>
<li>Hybrid battery: 1.56 kWh</li>
<li>Engine: 1.6 litre GDi</li>
<li>WLTP CO2: 84 g/km</li>
</ul>

</td>
<td>
<img src="images/transport/hyundai_ioniq_electric.jpg">
</td>
</tr>


<tr>
  <td style="width:65%">
    <p><b>Hyundai ix35 Hydrogen Fuel Cell</b></p>
    <ul>
    <li>Range: 369 miles (594 km, NEDC, estimated 495 km WLTP)</li>
    <li>Hydrogen tank capacity: 5.64 kg (222 kWh HHV)</li>
    <li>Economy kWh: 0.374 kWh/km NEDC (0.449 kWh/km WLTP)</li>
    </ul>

    https://en.wikipedia.org/wiki/Hyundai_ix35_FCEV

    <p>The Toyota Mirrai gets 502 km on 5kg of hydrogen, a similar 0.392 kWh/km HHV NEDC<a href="https://en.wikipedia.org/wiki/Toyota\_Mirai">https://en.wikipedia.org/wiki/Toyota_Mirai</a></p>

    <p>The newer Hyundai NEXO has a 6.3 kg tank and a NEDC range of 805 km (0.308 kWh/km) or WLTP range of 666 km (0.373 kWh/km)</p>

    <p><b>Hyundai ix35 Petrol GDI 2016</b></p>
    <ul>
    <li>WLTP MPG: 44.1 MPG</li>
    <li>Real world MPG: 31 MPG? @70% of WLTP</li>
    <li>Economy kWh: 0.623 kWh/km based on 44 MPG</li>
    <li>Economy kWh: 0.888 kWh/km based on 31 MPG</li>
    <li>Max kWh per passenger: 0.18 kWh/p.km</li>
    <li>WLTP CO2: 149 g/km</li>
    </ul>

    https://used.hyundai.co.uk/model-search/Hyundai/ix35/page1/16-GDI-SE-Blue-Drive-n5bz3pv

    <p>If we assume a petrol engine efficiency of 28%, the equivalent electric drivetrain would have an economy of 0.623 kWh/km x 28% = 0.174 kWh/km. The fuel cell economy of the ix35 is 0.449 kWh/km HHV WLTP suggesting a fuel cell efficiency of 39%.</p>

    <p>This forbes article suggests that the NEXO fuel cell stack has an efficiency of 60% while previous models obtained 55%, 7% of the difference in efficiency may be using HHV vs LHV hydrogen values, but is it more likely that the difference is due to fuel cell efficiency curve in real world use? https://www.forbes.com/sites/sebastianblanco/2018/10/18/hyundai-nexo-drive/#5607076b275d</p>

    <p>NDEC vs WLTP https://www.autovistagroup.com/news-and-insights/wltp-focus-understanding-disparities-wltp-and-nedc-correlated-data</p>

  </td>
  <td>
    <img src="images/transport/hyundai_ix35_H2.JPG">
  </td>
</tr>
</table>

## Motorbikes

4.83 bn passenger km [1] and 4.51 bn vehicle km [2] were travelled by motorcycle in 2016 consuming 2.41 TWh of energy [3]. A per person economy of 0.499 kWh/p.km, per vehicle economy of 0.534 kWh/v.km and occupancy of 1.07. A vehicle economy equivalent to 51 MPG and 127 gCO2/v.km, 205 gCO2/v.mile.

<table>
<tr>
  <td style="width:65%">
    <p><b>Electric Motorbikes</b></p>

    <p>The Harley-Davidson LiveWire has a city range of 140 miles (225 km) and combined stop-and-go highway range of 88 miles (142 km), estimated 7 kWh battery. https://www.harley-davidson.com/gb/en/motorcycles/future-vehicles/livewire.html</p>

    <p>7 kWh divided by 225 km is 0.031 kWh/km, 7 kWh divided by 142 km is 0.049 kWh/km</p>

    <p>The Zero SR/F gets a combined range of 109-123 miles from 12.6 usable kWh https://www.zeromotorcycles.com/zero-srf. Assuming 116 miles (187 km) and 12.6 kWh suggests 0.067 kWh/km</p>

    <p>The Lightnight Strike electric superbike gets 70-100 miles from 10 kWh (0.073 kWh/km) or 150-200 miles from 20 kWh (0.071 kWh/km) https://www.motorcyclenews.com/advice/best/electric-motorbikes</p>

    <p><b>Petrol Motorbikes</b></p>
    <p>The most efficient motorbike listed in the following bennets article is the Honda CBF125 suggesting 160 mpg but most get around 80 mpg: https://www.bennetts.co.uk/bikesocial/news-and-views/news/2015/january/most-fuel-efficient-motorcycles</p>

    <p>On fuelly the Honda CBF125 gets ~ 102 mpg real world (http://www.fuelly.com/motorcycle/honda/cbf125) while the quoted 80 mpg Honda NC750X gets ~62 mpg (http://www.fuelly.com/motorcycle/honda/nc750x). The Honda CBR250R gets a real world fuelly 68 mpg.</p>

    <p>100 mpg is 35.4 km/litre, 3.65 km/kWh or 0.274 kWh/km. 80 mpg is 0.343 kWh/km.</p> 

    <p><b>Electric, Hydrogen and Synthetic fuels</b></p>

    <p>The difference between the Zero SR/F and the Honda CBF125 suggests that the ICE efficiency is around 24%. We might also guess that a hydrogen motorbike will get 0.167 kWh/km based on a fuel cell efficiency of 40%.</p>
  </td>
  <td>
    <img src="images/transport/livewire.png">
    <img src="images/transport/660_CBF125red.jpg">
  </td>
</tr>
</table>

## Buses

34.36 bn passenger km [1] and 4.0 bn vehicle km were travelled by bus & coach in 2016 consuming 14.3 TWh of energy [3]. A per person economy of 0.416 kWh/p.km and per vehicle economy of 3.58 kWh/v.km. The average occupancy based on passenger km divided by vehicle km is 8.5. The vehicle economy works out to 8.4 MPG and CO2 emissions: 104 gCO2/p.km, 168 gCO2/p.mile, 897 gCO2/v.km, 1443 gCO2/v.mile.

A different uk gov statistics table gives the occupancy of local bus services in 2016 for the whole of great britain as 11.3 passengers per vehicle [B1].

A quick search for bus MPG suggests that a lower economy of ~5 MPG (6 kWh/km) is typical with newer hybrid buses achieving 6.1 mpg (5 kWh/km) and a potential of 7.7 mpg (3.9 kWh/km) [B2]. Another paper however suggests that a better economy is achieved today with modern urban cycle diesel buses at 4.13 kWh/km, the paper references multiple studies with a range of diesel bus economies of ~3.5 kWh/km to 4.9 kWh/km [B3].

The Mercedes Benz Citaro is perhaps a good example of a modern urban cycle bus, in testing it achived a fuel consumption of 38.7L/100 km [B4] which works out to 4.14 kWh/km (7.3 MPG). The same test found the economy for a Setra ComfortClass S 515 HD coach to be 21.0L/100 km [B4] (2.25 kWh/km, 13.4 MPG). A cleanmpg thread discuss similar values [B5].

A vehicle economy of 3.58 kWh/v.km and MPG of 8.4 MPG seems relatively high given many of the city bus type examples but may reflect significant mileage of long range higher efficiency coaches such as Setra ComfortClass pulling the average MPG up?

The Mercedes Benz Citaro has 26-31 seats and space for 60-74 standing (86-105 in total), the Setra ComfortClass S 515 HD has 51 seats. If we assume a 50/50 mix of both bus types, the average seating capacity is ~40 seats increasing to ~80 places with standing passengers. The standing spaces are of course useful for short city journey's in peak rush hour providing significant additional capacity while the seated capacities are more indicative of longer routes & more rural bus services. An average occupancy of 8.5 passengers per vehicle is a load factor of 21% on a 40 seat bus, or 11% at 80 spaces.

**Increasing occupancy**<br>
The average load factor for buses is low and could in theory be increased substantially without adding additional vehicle miles. The average number of passengers per vehicle in London in 2017/2018 was 20.2, almost twice the national average for local bus services and 2.4x the average for all buses and coaches. 20.2 p/vehicle is a load factor of 50% seated, or 25% including standing. At 3.58 kWh/vehicle.km, 20.2 passengers would reduce the per passenger energy consumption to 0.177 kWh/p.km and per passenger CO2 emissions to 71gCO2/mile or 44gCO2/km.

- 8.5 passengers per vehicle: 0.416 kWh/p.km (average all)
- 11.3 passengers per vehicle: 0.317 kWh/p.km (average local services)
- 20.2 passengers per vehicle: 0.177 kWh/p.km (average London)
- 40.0 passengers per vehicle: 0.090 kWh/p.km (full seated)
- 80.0 passengers per vehicle: 0.045 kWh/p.km (full seated & standing)

**Electrification**<br>
The two electric bus examples below, the Proterra BE35 and BYD K9 have an economy of 1.34 kWh/km and 1.3 kWh/km respectively. Demonstrating a 64% reduction in energy consumption vs internal combustion, similar to electric cars above.

- 8.5 passengers per vehicle: 0.153 kWh/p.km (average all)
- 11.3 passengers per vehicle: 0.115 kWh/p.km (average local services)
- 20.2 passengers per vehicle: 0.064 kWh/p.km (average London)
- 40.0 passengers per vehicle: 0.033 kWh/p.km (full seated)
- 80.0 passengers per vehicle: 0.016 kWh/p.km (full seated & standing)

**References**

B1. https://assets.publishing.service.gov.uk/government/uploads/system/uploads/attachment_data/file/774589/bus0304.ods<br>
B2. https://www.bbc.co.uk/news/uk-england-london-22625940<br>
B3. http://www.tf.llu.lv/conference/proceedings2015/Papers/060_Graurs.pdf<br>
B4. https://media.daimler.com/marsMediaSite/en/instance/ko/Promise-kept-demonstrably-lower-fuel-consumption-with-Euro-VI-certified-Mercedes-Benz-Citaro-and-Setra-ComfortClass.xhtml?oid=9904236<br>
B5. http://www.cleanmpg.com/community/index.php?threads/45475<br>

**Comparisons**

1. CarbonIndependent: 100gCO2/p.mile based on allocated ~40% of bus emissions as a government service and 60% on a per passenger km basis: http://www.carbonindependent.org/sources_bus.html
2. Resurgence carbon calculator, 176 gCO2/p.mile: https://www.resurgence.org/resources/carbon-calculator.html

<table>
<tr>
  <td style="width:65%">

  <p><b>Electric buses</b></p>
  <p><b>Proterra BE35</b></p>
  <ul>
  <li>Battery capacity: 88 kWh (shortest range model)</li>
  <li>Economy: 2.15 kWh/mile, 1.34 kWh/km, Range: ~41 miles (NREL study)</li>
  <li>35 seats 18 standing 55 max</li>
  <li>Economy per seated passenger (full): 0.038 kWh/p.km</li>
  <li>Economy seated and standing (full): 0.024 kWh/p.km</li>
  <li>Economy proterra website: 1.21-2.02 kWh/mile, 0.75-1.26 kWh/km<br>
  Seating capacity: 28, 0.027-0.045 kWh/p.km</li>
  <li>Curb weight: 13120kg (238 kg per person at max occupancy)</li>
  </ul>
  https://cleantechnica.com/2016/02/22/electric-buses-efficient-as-he-nrel-finds<br>
  https://www.proterra.com/products/35-foot-catalyst
  
  <p><b>BYD K9</b></p>
  <ul>
  <li>Battery capacity: 324 kWh</li>
  <li>Economy: 1.3 kWh/km, 250 km range</li>
  <li>29 seats, 50 standing, 1 wheelchair, total 80</li>
  <li>Economy per seated passenger (full): 0.043 kWh/p.km</li>
  <li>Economy seated and standing (full): 0.016 kWh/p.km</li>
  <li>Curb weight: 13,800kg (173 kg per person at max occupancy)</li>
  </ul>
  https://en.wikipedia.org/wiki/BYD_K9<br>
  https://sgwiki.com/wiki/BYD_K9
  
  <p><b>London Routemaster Hybrid</b></p>
  <ul>
  <li>Economy: 6.74 mpg (4 kWh/km)</li>
  <li>Capacity: 87</li>
  <li>Economy per passenger (full): 0.046 kWh/p.km</li>
  </ul>
  https://en.wikipedia.org/wiki/New_Routemaster<br>
  https://www.bbc.co.uk/news/uk-england-london-22625940<br>
  Standard diesel bus ~5 mpg
  
  </td>
  <td>
    <img src="images/transport/Proterra-electric-buses-570x285.png">
    <img src="images/transport/bydk9.jpg">
    <img src="images/transport/routemaster.jpg">
  </td>
</tr>
</table>

## Trains

79.67 bn passenger km were travelled by train in 2016 [1] consuming 11.96 TWh of energy [4]. A per person economy of 0.150 kWh/p.km. The DECC 2050 calculator gives a rail load factor of 32.4% for 2007 [T1], Other studies suggest similar load factors e.g [T2]. 

If the load factor was 100% the energy consumption per person km would be 0.0486 kWh/p.km or 4.86 kWh/p.100km. This compares well with examples given by David MacKay FRS in his book Sustainable Energy Without the Hot Air.

A diesel train with an economy of 0.09 kWh/p.km when full will emit 0.09 kWh/p.km x 250gCO2/kWh = 23 gCO2/p.km (37 gCO2/p.mile). At an average load factor of 32.4% this rises to 69 gCO2/p.km (111 gCO2/p.mile).

An electric train with an economy of 0.03 kWh/p.km when full, powered by the UK grid with an average carbon intensity of 283 gCO2/kWh in 2018 [T7] will emit 0.03 kWh/p.km x 283gCO2/kWh = 8.5 gCO2/p.km (13.7 gCO2/p.mile). At an average load factor of 32.4% this rises to 26 gCO2/p.km (42 gCO2/p.mile).

"Eurostar has said that the e3202 (electric) will consume 0.33 litres of petrol equivalent per seat over 100km" [T5] this is equivalent to 0.032 kWh/p.km, assumed to be at full occupancy.

**Comparisons**

If you have used Loco2 to book European or UK train tickets you will likely have noticed the carbon saving calculation that compares train travel to air travel. Their calculation is based on the Eurostar emissions factor of 15.02gCO2/p.km [T4], I can replicate this result with either an old grid carbon intensity of ~500gCO2/kWh or a train load factor of ~57% at 2018 emissions levels and a train economy of 0.03 kWh/p.km.

**Comparison with buses**

The average train passenger energy consumption of 0.150 kWh/p.km is 64% less than the average for buses above. A rough calculation based on the diesel train economy above suggests that electrification may make up two thirds of the difference. 60% of all rail journeys are by electric traction [T3]. Trains also have a higher load factor at 32.4% vs 11-21% for buses.

Its not clear if the train load factor is for seated capacity only or seated + standing, if we assume it is seated capacity and model electrification and a load factor of 30% for both modes the per passenger energy consumption, electric buses would achieve 0.108 kWh/p.km and electric trains 0.100 kWh/p.km. A nissan leaf electric car at 30% occupancy achieves 0.106 kWh/p.km. I find these results much closer to each other than I would have thought, what have I missed? A more thorough physics first principles approach might be interesting of the form taken by David MacKay here [T8].

**References**

T1. DECC 2050 Calculator<br>
T2. https://orr.gov.uk/__data/assets/pdf_file/0004/3658/civity-toc-benchmarking-201112.pdf<br>
T3. https://en.wikipedia.org/wiki/Railway_electrification_in_Great_Britain<br>
T4. https://loco2.com/en-gb/blog/travel-green-calculating-your-carbon-savings<br>
T5. https://www.businessgreen.com/bg/news/1869884/france-attempts-derail-eurostars-green-trains<br>
T6. https://en.wikipedia.org/wiki/British_Rail_Class_230<br>
T7. https://www.gov.uk/government/publications/greenhouse-gas-reporting-conversion-factors-2018<br>
T8. http://withouthotair.com/cA/page_254.shtml<br>

<table>
<tr>
  <td style="width:65%">
  <p><b>Electric train 1</b><br>
  Economy: 1.6 kWh per 100 passenger-km (full), 0.016 kWh/p.km<br>
  Its not clear if this energy consumption is average or max power.<br>
  http://withouthotair.com/c20/page_119.shtml
  </p>

  <p><b>London Tube</b><br>
  Economy: 4.4 kWh per 100 passenger-km (full), 0.044 kWh/p.km<br>
  http://withouthotair.com/c20/page_120.shtml
  </p>
  
  <p><b>High speed intercity train</b><br>
  Electric Economy: 3 kWh per 100 passenger-km (full), 0.03 kWh/p.km<br>
  Diesel Economy: 9 kWh per 100 passenger-km (full), 0.09 kWh/p.km<br>
  http://withouthotair.com/c20/page_120.shtml<br>
  http://www.withouthotair.com/c20/page_135.shtml
  </p>

  </td>
  <td>
    <img src="images/transport/train.png">
  </td>
</tr>
</table>

## Aircraft
<table>
<tr>
  <td style="width:65%">
  
  <p><b>Eviation Alice Electric aircraft (proposed)</b></p>
  <ul>
  <li>Battery capacity: 900 kWh</li>
  <li>Range: 650 miles (1046 km)</li>
  <li>Passengers: 9 + 2 pilots</li>
  <li>Economy: 0.861 kWh/km, 0.078 kWh/pkm</li>
  </ul>
  
  <p><b>Conventional Boeing 737-800</b></p>
  <ul>
  <li>Passengers: 189 passengers max</li>
  <li>Economy: 37 kWh per 100 pkm, 0.37 kWh/pkm</li>
  </ul>
  http://withouthotair.com/c5/page_36.shtml<br><br>
  Eviation Alice suggests a 80% reduction in energy consumption per passenger km and further energy savings once synthetic fuel production is taken into account.
  </td>
  <td>
    <img src="images/transport/eviationalice.jpg">
    <img src="images/transport/boeing737.png">
  </td>
</tr>
</table>

## Road Freight
<table>
<tr>
  <td style="width:65%">
  
  <p><b>Volvo Trucks (ICE)</b><br>
  https://www.volvotrucks.com/content/dam/volvo/volvo-trucks/markets/global/pdf/our-trucks/Emis_eng_10110_14001.pdf
  <br><br>
  48 lires per 100km full load 40 tons<br>
  48 * 10.7 = 513.6 kWh per 100km / 40 = 12.84 kWh per 100km.ton = 0.1284 kWh/ton.km<br>
  32 * 10.7 = 342.4 kWh per 100km / 26 = 13.16 kWh per 100km.ton = 0.1317 kWh/ton.km<br>
  35 * 10.7 = 374.5 kWh per 100km / 14 = 26.75 kWh per 100km.ton = 0.2675 kWh/ton.km<br>
  27.5 * 10.7 = 294.25 kWh per 100km / 8.5 = 34.62 kWh per 100km.ton = 0.346 kWh/ton.km<br>
  </p>

  <p><b>Tesla Semi</b><br> 
  1000 kWh battery, 543 miles, 1.84 kWh/mile, 1.15 kWh/km<br>
  0-60 with 80k lbs = 36,287 kg<br>
  0.032 kWh/ton.km (75% less than 40 ton volvo truck)
  </p>

  <p><b>Emoss electric trucks</b><br> 
  http://www.emoss.nl/en/electric-vehicles/electric-delivery-van<br>
  http://www.emoss.nl/en/electric-vehicles/full-electric-truck<br>
  84 kWh / 175 km / 5 tons = 0.096 kWh/ton.km<br>
  240 kWh / 250 km / 18 tons = 0.053 kWh/ton.km (not clear what payload weight is)<br>
  </p>
  
  <p><b>UK Statistics (from ZCB model)</b><br>
  157 billion ton km in 2007<br>
  29,400,000,000 vehicle km in 2007<br>
  5.34 tons per vehicle<br>
  energy used 87.66 TWh<br>
  87,660,000,000÷157,000,000,000 = 0.558 kWh/ton.km<br>
  almost half: http://withouthotair.com/c15/page_92.shtml</p>
  
  </td>
  <td>
    <img src="images/transport/teslasemi.jpg">
  </td>
</tr>
</table>

## Rail Freight
<table>
<tr>
  <td style="width:65%">
  
  <p><b>UK Statistics (from ZCB model)</b><br>
  21 billion ton km in 2007<br>
  44,700,000 vehicle km in 2007<br>
  470 tons per vehicle<br>
  energy used 2.31+0.10 = 2.41 TWh<br>
  2410000000÷21000000000 = 0.115 kWh/ton.km, electric might be 0.046 kWh/ton.km<br>
  not far off http://withouthotair.com/c15/page_92.shtml</p>
  
  </td>
  <td>

  </td>
</tr>
</table>

## Batteries, hydrogen & electro-fuels
<table>
<tr>
<td style="width:65%">
<p>The transport examples listed above cover a range of vehicles from battery electric through to conventional liquid or gas fuelled engines. Liquid and gas fuels can be produced via power-to-X processes and so are in theory a zero-carbon technology option provided the fuel is synthesised in this way. The efficiencies of the different routes are however quite different and the following diagram created by transport and environment gives a good overview:</p>

https://www.transportenvironment.org/sites/te/files/publications/Full_%20Roadmap%20freight%20buses%20Europe_2050_FINAL%20VERSION_corrected%20%282%29.pdf
<br><br>
Interesting notes on overhead electric lines for trucks
</td>
<td>
<a href="images/transport/transport_env_comparison.jpg"><img src="images/transport/transport_env_comparison.jpg"></a>
</td>
</tr>
</table>

**Energy content per ton of road transport fuel**<br>
1 ton of petrol is 1335 Litres @ 9.7 kWh/L: 12952 kWh/ton. 1 ton of diesel is 1175 Litres @ 10.7 kWh/L: 12576 kWh/ton. 32.6% of road transport fuel is petrol and 67.4% diesel suggesting an average kWh/ton of ~12699 kWh/ton. This compares to 11630 kWh/ton oil equivalent.
