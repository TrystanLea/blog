## title: Fischer Tropsch process for synthetic liquid fuel production
### published: 2019-05-24

<p>There are several different approaches being developed for the production of synthetic hydrocarbon liquid fuels that could be used for non-electrified ground transport and aviation. Most use the <a href="https://en.wikipedia.org/wiki/Fischer%E2%80%93Tropsch_process">Fischer Tropsch</a> process to convert carbon monoxide and hydrogen into hydrocarbons, but with a variation on the source of carbon for the process.</p>

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
    
Previous background ZeroCarbonBritain research found a similar idealised fischer-tropsch process:

    1.0 kWh Biomass + 0.47 kWh Hydrogen → 1.25 kWh biofuel      85% efficient
    
The ZeroCarbonBritain model uses an assumed less efficient process:

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
