## title: Zero Carbon Aviation?
### published: 2019-05-24

<p>Research notes on zero carbon or lower carbon aviation options.</p>

<p>There are several potential options for zero carbon or perhaps lower carbon flight, small short range aircraft may well be electrified directly with battery technology, a company called Harbour Air in Canada are planning <a href="https://www.bloomberg.com/news/articles/2019-03-26/canada-seaplane-operator-harbour-air-plans-electric-engine-flight">a fleet of 100 mile 6 seater electric sea planes, with their first flight scheduled for 2021.</a> Larger longer distance planes are harder to electrify due to current battery energy density limitations, something that could change over time if there is a substantial improvement in performance.</p>

<p>Another approach is to synthesise aviation fuel for conventional aircraft using a renewable or zero carbon feedstock and energy source. This can be achieved via a relatively inefficient conventional biofuel production process or alternatively as explored below; it may be possible to either increase the liquid fuel production of a biomass feed source by adding hydrogen created with electricity from excess renewable energy or create liquid fuel from carbon dioxide captured from the air directly, again with renewable energy as the energy source.</p>

<p>It's worth at this point noting that synthetic aviation fuel generated with zero carbon energy may not completely solve the climate change contribution from aviation due to other non carbon forcings. The following graphic from a <a href="https://www.carbonbrief.org/explainer-challenge-tackling-aviations-non-co2-emissions">carbon brief article</a> provides an overview of the other contributions, illustrating the aviation multiplier effect:</p>

<a href="images/FT/aviation_radiative_forcing.png"><img style="width:500px" src="images/FT/aviation_radiative_forcing.png"></a>

<p>While synthetic aviation fuel where carbon dioxide is captured from the air may reduce the carbon component of the radiative forcing, the remaining contributions may leave two thirds of the impact untouched! I'm vaguely aware from previous reading that there is a lot of complexity and uncertainty to these different radiative forcing's and that the weather conditions, time of day/year can all contribute to a different extent.</p>

<p>Battery electric air-craft would of course solve these other sources of radiative forcing as there is no NOx emissions, contrails or induced cirrus cloudiness.</p>

<div style="border-bottom: 1px solid #ccc"></div>

<h3>Synthetic Aviation Fuel Production</h3>

<p>There are several different approaches being developed for the production of synthetic hydrocarbon liquid fuels that could be used for aviation. Most use the <a href="https://en.wikipedia.org/wiki/Fischer%E2%80%93Tropsch_process">Fischer Tropsch</a> process to convert carbon monoxide and hydrogen into hydrocarbons, but with a variation on the source of carbon for the process.</p>

<p>It's worth noting that the output of the fischer tropsch process appears to be a mixture of products from petroleum liquids to gaseous products & ethane. The chemistry and detail of which is beyond my current understanding and research into this so far. An understanding of the different products would ideally be considered as part of a detailed industry model.</p>

<p>Most of the examples I found below used lower heating values (LHV) for input biomass and output fuels, but not all examples where explicit.</p>

**Notes from the ZeroCarbonBritain model**

Direct method: 

    1 TWh Biomass -> 0.52 TWh Biofuel
    
- This is based on 2.45 MWh of biofuel per oven dry tonne of biomass referenced by USA DoE study. Reference not found.
- ['Breaking the biomass bottleneck of the fossil free society'](https://www.researchgate.net/publication/265424162_Breaking_the_biomass_bottleneck_of_the_fossil_free_society) suggests biomass to liquid efficiency of 50% via conventional fermentation, p24.
- The study suggests that a hydrogenation pathway of 100 PJ biomass + 50 PJ Hydrogen -> 130 PJ diesel is possible, however the methanation example given is more efficient than the current state of the art and so its not clear how feasible the suggested liquid process efficiency is.

Potential hydrogenation process: 

    1.0 kWh Biomass + 0.50 kWh Hydrogen → 1.30 kWh diesel       87% efficient
    
ZeroCarbonBritain quote a similar idealised fischer-tropsch process:

    1.0 kWh Biomass + 0.47 kWh Hydrogen → 1.25 kWh biofuel      85% efficient
    
The ZeroCarbonBritain model uses an assumed? less efficient process:

    1.3 kWh Biomass + 0.61 kWh Hydrogen → 1.00 kWh biofuel      52% efficient
    1.0 kWh Biomass + 0.47 kWh Hydrogen → 0.78 kWh biofuel

Including the electrolysis stage, 80% electrolysis efficiency assumed:

    1.0 kWh Biomass + 0.59 kWh Electric → 0.78 kWh biofuel      49% efficient

Biomass source is woody biomass such as short rotation coppice.

<table>
  <tr>
    <td style="width:65%">

    <p><b>Paper: Improving carbon efficiency and profitability of the biomass to liquid process with hydrogen from renewable power (M.Hillestad et al, December 2018)</b></p>
    
    <p><a href="https://www.sciencedirect.com/science/article/pii/S0016236118313632#!">https://www.sciencedirect.com/science/article/pii/S0016236118313632#!</a></p>

    <p>This paper describes the combination of Fischer Tropsch Biomass to Liquid with the addition of hydrogen in detail and develops a detailed model of the process. The energy flow diagram from the paper to the right details the proposed performance:</p>

    <pre>1.0 kWh Biomass + 0.95 kWh Electric → 1.28 kWh FT products</pre>

    <p>An overall efficiency of 65.6%.</p>

    </td>
    <td><a href="images/FT/FThydrogen.png"><img src="images/FT/FThydrogen.png"></a></td>
  </tr>
  <tr>
    <td style="width:65%">

    <p><b>Neo Carbon Energy (Steam, CO2 and electricity to liquid fuels)</b></p>

    <p>Similarly NeoCarbonEnergy detail a process for the production of fisher tropsch liquid fuel using solid oxide electrolysis but in this case without the biomass carbon source. NeoCarbonEnergy uses a CO2 input instead: <a href="http://www.neocarbonenergy.fi/wp-content/uploads/2016/02/06\_Suomalainen.pdf">Presentation: Production of fisher tropsch liquid fuel using solid oxide electrolysis cells</a></p>

    <p>A SOEC produced Syngas (CO+H2) from inputs: steam, CO2 and electricity. The Syngas is converted to liquid fuels in a FT plant.</p>

    <p>Preliminary results suggest an electricity to fuel efficiency of 52.7% (LHV) without heat integration with 11.4 MW of electricity 0.74 kg/s of CO2 and 0.64 kg/s of water producing 6.0 MW of fuel (LHV).</p>

    <p>In the presentation they note that the process should theoretically yield an overall efficiency of 76.8% (LHV) with potential for further improvement above this figure towards 2030-2050.</p>


    </td>
    <td><a href="images/FT/neocarbon.png"><img src="images/FT/neocarbon.png"></a></td>
  </tr>
  <tr>
    <td style="width:65%">

    <p><b>Gas to Liquids</b></p>

    <p>One possibility could be to use synthetic methane created via the sabatier process in a second stage Fischer-Tropsch gas to liquids conversion.</p>
   
    <p>The Shell Pearl GTL gas to liquids project may be an applicable technology process:<br>https://en.wikipedia.org/wiki/Pearl_GTL</p>

    <p>45,000,000 m3/day natural gas x 10.6 kWh/m3 = 477 GWh/day, is converted to: 22,000 m3/day petroleum liquids = 22M litres/day x 9.7 kWh/litre = 213.4 GWh/day and 120 kilo barrels of oil equivalent (730 TJ) of natural gas liquids and ethane = 203 GWh/day</p>

    <pre>Output: 213.4 + 202.8 = 416.2 GWh/day, Input: 477 GWh/day<br>Efficiency ~87.3%</pre>
    
    <p>It's important to note that only 51.2% of the output is petroleum liquids, the remainder is natural gas liquids and ethane.</p>

    </td>
    <td></td>
  </tr>
</table>

<p><b>Sunfire Blue Crude (CO2 + Water + Electricity):</b><br>
<a href="https://www.sunfire.de/en/company/news/detail/first-commercial-plant-for-the-production-of-blue-crude-planned-in-norway">https://www.sunfire.de/en/company/news/detail/first-commercial-plant-for-the-production-of-blue-crude-planned-in-norway</a><br>
"electric capacity of 20 megawatts, producing 8,000 tons of Blue Crude per year", I calculate 8000 tons/year to be equivalent to a continuous power of 11.5 MW, suggesting an energy efficiency of 57.5%
</p>

<p><b>The Soletair process (CO2 + Water + Electricity):</b><br>
<a href="https://soletair.fi/technical-specifications/phase-6-renewable-consumer-products">https://soletair.fi/technical-specifications/phase-6-renewable-consumer-products</a><br>3167 kWh produces 100 kg/h of FT products, assuming 0.77 kg/litre suggests 130 litres/h with an energy content of 1261 kWh/h (9.7 kWh/litre)<br>Suggests an energy efficiency of ~40%.</p>

<p><b>Air fuel synthesis Ltd (CO2 + Water + Electricity):</b><br>
<a href="https://www.ofgem.gov.uk/ofgem-publications/40296/air-fuel-synthesispdf">https://www.ofgem.gov.uk/ofgem-publications/40296/air-fuel-synthesispdf</a><br>
1.6MW of power are required to make 1 tonne/day of AFS fuel. ~ 520 kW fuel = ~33% efficient</p>

<p><b>Audi E-diesel</b><br>
<a href="https://en.wikipedia.org/wiki/E-diesel">https://en.wikipedia.org/wiki/E-diesel</a><br>
The Audi E-diesel plant in Dresden uses the Sunfire technology.</p>

<p><b>Sun to Liquid: Fuels from concentrated sunlight</b><br>
<a href="http://www.solar-jet.aero">http://www.solar-jet.aero</a> now <a href="https://www.sun-to-liquid.eu">https://www.sun-to-liquid.eu</a><br>
Aim to deliver direct concentrated solar to syngas efficiencies exceeding 30%.</p>

<p><b>Velocys Biorefinery</b><br>
<a href="https://www.velocys.com/our-biorefineries-2">https://www.velocys.com/our-biorefineries-2</a><br>
Wood gasification and fischer tropsch, landfill gas and gas to liquids fischer tropsch technology.<br>
<a href="https://www.velocys.com/wp/wp-content/uploads/Velocys_UK_waste-to-jet-fuel_brochure_181128.pdf">https://www.velocys.com/wp/wp-content/uploads/Velocys_UK_waste-to-jet-fuel_brochure_181128.pdf</a><br>
Otherwise landfill waste is gasified to create syngas and then converted to jet fuel, diesel and naphtha via fischer tropsch.
</p>

<p><b>Bio Based Maine</b><br>
<a href="https://biobasedmaine.org/2019/02/renewable-jet-fuel-from-woody-biomass/">https://biobasedmaine.org/2019/02/renewable-jet-fuel-from-woody-biomass/</a><br>
Woody biomass fermentation and catalytic conversion</p>

<p><b>UK Gov funding for synthetic aviation fuels, ongoing</b>
<a href="https://www.gov.uk/government/news/government-funding-boost-for-low-carbon-fuels-development">https://www.gov.uk/government/news/government-funding-boost-for-low-carbon-fuels-development</a></p>

<p><b>Exergy analysis of a production process of Fischer-Tropsch fuels from biomass</b><br>
<a href="http://www.oilcrisis.com/netenergy/woodfischertropsch.pdf">http://www.oilcrisis.com/netenergy/woodfischertropsch.pdf</a><br>
Results: For the standard process, the rational efficiency (defined as exergy content of the Fischer-Tropsch products divided by the exergy content of all input materials, heat and work) amounts to 51.2%. This can be subdivided between 38.5% for the liquids and 12.7% for the tail gases.</p>

<p><b>Process efficiency of biofuel production via gasification and Fischer–Tropsch synthesis</b><br>
<a href="https://www.sciencedirect.com/science/article/pii/S0016236113002019">https://www.sciencedirect.com/science/article/pii/S0016236113002019</a><br>
The maximum overall process efficiency of 51%, of which 40% was in the form of Fischer–Tropsch liquids</p>

<div style="border-bottom: 1px solid #ccc"></div>

<h3>Synthetic Aviation Fuel Land Areas</h3>

<a href="https://www.transportenvironment.org/sites/te/files/Power-to-Liquids%2C%20Potentials%20and%20Perspectives\_Dr.%20Harry%20Lehmann.pdf">https://www.transportenvironment.org/sites/te/files/Power-to-Liquids%2C%20Potentials%20and%20Perspectives_Dr.%20Harry%20Lehmann.pdf</a>

<a href="images/FT/landuse.png"><img style="width:500px" src="images/FT/landuse.png"></a>

<p>A conventional Boeing 737-800 has an economy of 0.37 kWh/p.km at an occupancy of ~85%, suggesting 0.31 kWh/p.km at full occupancy. Or via <a href="https://en.wikipedia.org/wiki/Fuel_economy_in\_aircraft">https://en.wikipedia.org/wiki/Fuel_economy_in_aircraft</a> 0.29 kWh/p.km at full occupancy. The Boeing 737-800 has 189 seats and so uses ~55 kWh/km</p>

<p>Short rotation coppice can produce 56,640 kWh/ha/yr (<a href="https://learn.openenergymonitor.org/sustainable-energy/energy/renewableheat">ZeroCarbonBritain yield assumptions</a>)</p>

<p><b>Biomass to Liquid: 515 km/ha</b><br>At a biomass to liquid fuel conversion efficiency (without additional hydrogenation) the fuel yield is halved to 28,320 kWh fuel/ha/yr, enough to fly 515 km in a full Boeing 737-800.</p>

<p><b>Power & Biomass to Liquid: 1318 km/ha</b><br>sing the hydrogenation via renewable electricity route described above 56,640 kWh/ha/yr of biomass would be enough to produce 128% or 72,499 kWh/ha/yr of fuel, enough to fly 1318 km.</p>

<p><b>Solar Power to Liquid + DAC: 8000 - 23,200 km/ha</b><br>
Solar PV panels can have a peak output of about 195 W/m2, 1 kW of solar in the UK can generate about 850 kWh/year or 166 kWh/m2/yr (1,657,500 kWh/ha/yr, 30x the short rotation coppice yield, assuming entire hectare is covered completely).</p>

<p>If NeoCarbonEnergy achieve 77% efficiency for the conversion of electric to fuel it would be possible to fly 23,205 km/ha/yr, at 52% efficiency this drops to 15,882 km/ha/yr. We might expect this to fall by a half or 2/3rds in a solar farm arrangement with spacing in between rows of panels. Bringing our back of the envelope estimate in range of the graphic above.</p>

<p><b>2000 km return power to liquid short haul flight: 756 kWh electricity, 0.9 kWp solar, 4.8 m2</b><br>Alternatively a short haul flight from Manchester to Geneva return is about 2000 km, this would use 110,000 kWh of fuel or 582 kWh per person. Generated at 77% efficiency would require 756 kWh of electricity, 90% of the output of a 1kW solar PV array. If two people from a household go on holiday the annual output of a 1.8 kWp system would be required, just under half a typical 3.8 kWp domestic PV system. This would however only eliminate the carbon component of the climate change impact of aviation, <b>further negative emissions would be required to offset the other components.</b></p>

<p><b>2000 km return power & biomass to liquid: 1318 km/ha, 80 m2 per person biomass + ~2.4 m2 solar</b></p>

<p><b>2000 km return biomass to liquid flight: 515 km/ha, 205 m2 per person</b></p>

<p><b>2000 km return train journey: 0.016 kWh/pkm (full), 64 kWh, 0.075 kWp solar, 0.4 m2</b></p>

<p><b>2000 km return electric car journey: 0.032 kWh/pkm (full), 128 kWh, 0.150 kWp solar, 0.8 m2</b></p>

<p><b>2000 km return Eviation Alice Electric aircraft: 0.078 kWh/pkm (full), 312 kWh, 0.370 kWp solar, 1.9 m2</b></p>

<h3>Carbon Capture</h3>

<p>In response to Keith Alexander and Dominic Zapaman on twitter asking the question <a href="https://twitter.com/Zapaman/status/1128731762950070272">"How much land would it take to grow biofuel to fly a plane from New York to Hong Kong, vs biomass for BECCS to offset the flight using fossil fuels?"</a></p>

<p>3.3 gigatonne stored per year, requires 300-700 million hectares: 4.7-11.0 tons/ha, 0.1-0.2 ton/ha, mid range 6.6 tons/ha, 0.15 ha/ton <a href="https://www.globalccsinstitute.com/wp-content/uploads/2019/03/BECCS-Perspective_FINAL_18-March.pdf">https://www.globalccsinstitute.com/wp-content/uploads/2019/03/BECCS-Perspective_FINAL_18-March.pdf</a> - I need to review and understand the different approaches here.</p>

<p>If we fuel our 2000 km flight above with fossil fuel kerosense 582 kWh per person would emit 151 kg CO2, if we take into account the radiative forcing of NOx and cloud formation this may be increased to 453 kg CO2 equivalent.</p>

<p>Sequestering 453 kg of CO2 AT 6.6 tons/ha requires 686 m2. Alternatively sequestering an amount of CO2 to cover the non CO2 radiative forcing 302 kg CO2e would require 455 m2. The land area requirement to sequester CO2 is very similar to the land area for the inefficient biomass to liquid process: 205 m2 vs 231 m2 for avoidance of the same quantity of CO2. 2-3x the land area is required to offset the non-C02 emission components.</p>

<p>Using power and biomass to liquid might reduce this fuel component from ~200m2 down to ~80m2. Using solar power to liquid could reach ~5m2. The non CO2 component would still add around ~455 m2 of land required for carbon capture.</p>

<p><b>Further questions</b><br>
How would direct air capture compare to biomass based carbon capture in land area terms?<br>
Can carbon be captured from the biomass to liquid process? is that a potential BECCS process itself? examples of BECCS plants in linked report are often corn ethanol production.<br>
Can NOx emissions and cloud formation radiative forcing contributions be reduced significantly?
</p>
