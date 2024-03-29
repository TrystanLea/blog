## title: Scenario Variations
### published: 2022-10-24

<h2>Variations on the ZCB scenario</h2>

<p>The ZeroCarbonBritain scenario is not intended as the only way to do things. It is a starting point for conversation, a guide, that provides one potential way forward. The following explores in outline many different ideas for variations to the main scenario. We might ask: What would the scenario look like if we where more or less ambitious in insulating our homes or reducing travel? What if we can't reach the high level of heat pump use and used hydrogen from electrolysis instead?</p>

<p>The following variations to v3 of the ZeroCarbonBritain model explore the results from different levels of power down ambition, heating systems and other aspects of the scenario. Some of these scenario variations are written as guides that can be used to replicate the result in the scenario tool.</p>

<p><b>A note on different model versions</b></p>
<ul>
<li><i>ZeroCarbonBritain v1:</i> This is a precise replica of the original hourly model spreadsheet developed by Tobi Kellner for validation. The input fields require outputs from the ZCB matrix spreadsheet.</li>
<li><i>ZeroCarbonBritain v2:</i> Used for the 'Rising to the Climate Emergency' ZCB report in conjunction with the ZCB matrix spreadsheet. Changes to inputs to reflect updated ZCB matrix spreadsheet. Minor modifications to heat and electric storage algorithms, industry DSR electric/gas heat switching. Additional technology options for scenario exploration: e.g synthetic gas heating.</li>
<li><i>ZeroCarbonBritain v3:</i> Integrates transport model from ZCB matrix, includes simple calculators for LAC and DHW sections. Hydrogen and synthetic liquid fuel storage. Additional technology options for scenario exploration: e.g IHTEM for power to gas, bivalent synthetic gas heating. Hydrogen boiler. Selection of different electricity storage algorithms, basic vs peak removal (average). Separate treatment of CO2 stream in biogas as part of sabatier process. New scenario outputs: Land areas for biomass, Scaled to village, town, country scale, embodied energy (basic).</li>
</ul>

<p><b>More power down ambition</b></p>
<ul>
<li>1. Replacing 1000 electric car and van miles with 1000 ebike miles</li>
<li>2. Replacing 1000 electric car and van miles with 1000 electric bus miles</li>
<li>3. Improving the efficiency of the electric car and van fleet</li>
<li>4. Passivhaus standard or similar for all building stock</li>
<li>5. Full electrification of aviation</li>
<li>6. Radical power down & efficiency</li>
</ul>

<p><b>Less power down ambition</b></p>
<ul>
<li>1. Road transport electrification without modal shifts or reduction in travel distance</li>
<li>2. No reduction in aviation as well</li>
<li>3. No reduction in space heating demand</li>
<li>4. No reduction in space heating demand & direct electric + bivalent gas heating</li>
</ul>

<p><b>Heating systems</b></p>
<ul>
<li>1. Gas boilers: Synthetic methane heating using enhanced biogas process</li>
<li>2. Gas boilers: Synthetic methane using direct air capture of CO2</li>
<li>3. Gas boilers: Hydrogen</li>
<li>4. Electric resistance heating</li>
<li>5. Bivalent electric resistance heating with backup gas boilers instead of using CCGT power stations</li>
<li>6. Biomass boilers</li>
<li>7. Bivalent heatpumps with backup gas boilers instead of using CCGT power stations</li>
</ul>

<p><b>Other</b></p>
<ul>
<li>Hydrogen cars & vans</li>
<li>A large battery instead of power to gas</li>
<li>Industry energy consumption in line with DECC projections in 2017</li>
<li>5GW of Nuclear</li>
</ul>

<h3>More power down ambition</h3>

<h4>1. Replacing 1000 electric car and van miles with 1000 ebike miles</h4>

<p>The standard scenario currently includes 323 miles per person of cycling and ebike miles in 2030, an increase of almost 7x compared to 48 miles per person today. The average person in the Netherlands today however cycles <a href="https://www.cbs.nl/en-gb/background/2015/27/factsheet-the-netherlands-cycling-country">620 miles/year with younger generation cycling 1240 miles/year</a>. What if we imagine a really ambitious drive to increase the cycling by 1000 miles per person to 1323 miles and cut car use from 4350 to 3350 miles per person? What would the effect be on the amount of offshore wind required?</p>

<p>1. In the transport section: add 1000 miles to the ebike mileage giving a total of 1155 miles per person per year and subtract 1000 miles from the car & van mileage giving 3350 miles per person per year.</p>

<p>2. Navigate to the 'Stores' tab to see the hydrogen, synth fuel and methane store levels, notice how the stores are filling up now that we have reduced demand, reduce offshore wind capacity in the supply tab to try to bring the end store levels back to a similar level to their starting levels without hitting empty in the 2011 winter. </p>

<p>The result suggest that a reduction in offshore wind capacity from 134 GW to 126 GW is possible. Transport electricity demand is reduced by 8.8 TWh/yr.</p>

<p>It's important to note that the model does not currently capture the impact of such a shift on industrial energy demand, there would likely be further reductions associated with reduced industry demand for manufacturing cars and road infrastructure. A more detailed industry model coupled to domestic level choices is an area we wish to expand on in future.</p>

<p>A rough estimation of the effect of reducing per person car mileage from 4350 to 3350 would be a reduction in annual sales from 761 thousand to 586 thousand cars. This would save ~3.2 TWh of industrial energy demand (at 18 MWh per car), subtracting half this amount from high temp heat and half from non heat process electric allows for the reduction of offshore wind to ~124 GW. This would save another ~0.2 TWh of industrial energy demand required to manufacture the offshore wind.</p>

<h4>2. Replacing 1000 electric car and van miles with 1000 electric bus miles</h4>

<p>The average number of passengers per vehicle as well as vehicle efficiency makes a big difference in the comparison of all modes of transport, but especially bus, train and car modal comparisons. The ZCB model assumes that the average bus load factor increases to 42% out of a total seating + standing capacity of 60 people per bus. This means that the average bus would have ~25 passengers on board. This is an increase in occupancy from 8.5 passengers per bus today (load factor: 14%) and higher than the current average London occupancy of 20.2 passengers per bus (load factor: 34%). The ZCB scenario also projects an occupancy increases for cars and vans from 1.6 people per car (34%) to 2.0 people per car (40%).</p>

<p>Using the standard ZCB load factor assumptions, following the same process as described for the increased cycling scenario above, the result suggest that replacing 1000 electric car and van miles with 1000 electric bus miles could allow for a reduction in offshore wind capacity from 134 GW to 130 GW. If all car and van miles where replaced by electric bus miles the model suggests a reduction in offshore wind capacity from 134 GW to 115.5 GW.</p>

<p>If the bus load factor only rises to the current average London occupancy of 20.2 passengers per bus (34%) replacing a 1000 miles could result in a reduction in offshore wind of 134 GW to 132 GW. If all car and van miles where replaced with electric bus miles at the London occupancy average the reduction in offshore wind would be 134 GW to 120.5 GW.</p>

<p>If the average number of passengers per bus needs to increase from 8.5 (14.2%) to more than 12.4 (20.7%) to provide savings in energy consumption at a car occupancy of 40%, or 10 (16.5%) at the current car occupancy level of 32%.</p>  

<h4>3. Improving the efficiency of the electric car and van fleet to Tesla Model 3 or Hyundai Ioniq efficiency of 0.155 kWh/v.km</h4>

<p>The average fleet efficiency for electric cars and vans assumed in the ZCB model is 0.194 kWh/v.km including charging losses, this accounts for a mix of efficient models such as the Tesla Model 3 and Hyundai Ioniq and larger less efficient cars and vans. What if we achieved a better fleet efficiency of 0.155 kWh/v.km? Plugging the numbers into the model and decreasing the offshore wind supply to provide similar store levels to the baseline suggests a reduction in offshore wind capacity from 134 GW to 126 GW is possible.</p>

<h4>4. Passivhaus standard or similar for all building stock</h4>

<p>The ZCB scenario projects a 57% reduction in space heating demand compared to 2007 by 2030. This is achieved with an ambitious retrofit program, installing insulation, improving air-tightness and improving heating controls. The resulting fabric heat loss rate is ~120 W/K or ~45 kWh/m2.year for a house with a floor area of 85 m2. The passivhaus standard for new build is 15 kWh/m2.year or 25 kWh/m2.year for retrofit. What would the implication be of achieving Passivhaus levels of space heating reduction?</p>

<p>1. In the 'Simple domestic fabric efficiency calculator' select Superinsulated for Floor, Wall and Loft insulation, select triple-glazing and reduce effective ACH to 0.03, this meets the passivhaus target of 15 kWh/m2.year.</p>

<p>2. Set Services heat loss factor to 0.38 GW/K and Industry to 0.125 GW/K, this matches the same 85% reduction vs 2007 given by the domestic calculator. The resulting combined annual demand should read 55.9 TWh/yr.</p>

<p>3. Navigate to the 'Stores' tab, notice how the hydrogen, synth fuel and methane store levels continue to increase throughout the 10 year period, the reduction in space heating demand means we are now over producing. Click on the 'Supply' section and try reducing the capacity of Offshore wind so that the store levels finish at a similar level to where they started. Reducing capacity to 116 GW results in an even store level for synth fuel and hydrogen but the methane store is still climbing. Reducing the biomass to biogas amount from 74 TWh to 65 TWh seems to give a better result. We can also tune the electrolysis capacity to 23 GW while keeping the stores at a sufficient level.</p>

<p>4. An alternative to reducing the biomass for biogas would be to tune the methanation capacity and synth fuel production capacity. With Biomass to biogas at 74 TWh, methanation at 3.6 GW and synth fuel production at 10.1 GW - it appears to be possible to reduce offshore wind down to 106 GW.</p>

<h4>5. Full electrification of aviation (based on Eviation Alice efficiency)</h4>

<p>While electrification is not on the horizon yet for long distance aviation, short trips such as Ireland to Wales or Aberdeen to Bergen, Norway may be possible in small electric aircraft such as the <a href="https://trystanlea.org.uk/transport_notes">Eviation Alice (650 miles range with 9 passengers).</a> What would the energy implications be of a growth in this kind of small electric aircraft to replace 1118 miles per person look like?</p>

<p>The standard scenario includes 20% aviation electrification resulting in 2.6 TWh/yr of electric demand. 80% of aviation uses synthetic fuel resulting in 41.8 TWh/yr of demand. Switching all aviation to electric increases electric demand from 2.6 TWh/yr to 13.1 TWh/yr and reduces synth fuel demand to zero. Total end use energy is reduced by 31.3 TWh/yr. Biomass for fischer tropsch is however reduced by 54.3 TWh/yr and electric for synth fuel production by 31.8 TWh/yr. Overall electricity demand reduces by ~2/3rds or 21.3 TWh/yr, the equivalent output of 5.6 GW of offshore wind.</p>

<p>Standard scenario + aviation electrification:</p>

<ul>
<li>128.4 GW offshore wind up (-5.6 GW)</li>
<li>83 TWh of biomass for biogas up from 74 TWh</li>
<li>58.3 TWh of biomass for synth fuel down from 113.2 TWh</li>
<li>20.0 GW of electrolysis capacity down from 25 GW</li>
<li>5.0 GW of methanation capacity</li>
<li>4.9 GW of synth fuel production capacity</li>
<li>Excess 149.4 TWh</li>
<li>Primary energy factor 1.43</li>
<li>Total supply 1079 TWh</li>
</ul>

<p>In addition to the reductions calculated by the basic energy efficiencies of the switch from synth fuels to electric, we also see that biomass for biogas increases by 9 TWh. This is required to backup the electricity supply to power the additional electric demand of the electric planes. The total reduction in biomass energy is therefore 54.3 TWh - 9.0 TWh = 45.3 TWh.</p>

<h4>6. Radical power down & efficiency</h4>

<p>When modelling power down the ZeroCarbonBritain scenario tries to strike a balance in terms of the expected extent of power down measures. Depending on your view point it may seem overly ambitious or not ambitious enough.</p>

<p>As an example, the scenario projects an ambitious 67% reduction in aviation from 3438 miles per person per year down to 1118 miles per person per year. For some this will appear radically ambitious while others will be surprised that there are enough per person aviation miles to fly from Cardiff to Geneva return every year - if we all flew equally. Many will suggest that targeting a 57% reduction in space heating demand by 2030 via a nation wide retrofit program is overly ambitious, while we know that in theory we could go even further if we achieved passivhaus level retrofit performance. Another example is industrial energy consumption which makes up a large proportion of overall energy demand in the model, the standard scenario takes a cautious approach to industrial demand projecting that industrial energy consumption increases from 2007 levels in line with population growth mitigated partially by a 25% improvement in energy intensity, this results in an industrial energy demand that is higher than what we see in 2017 figures.</p>

<p>Given the broad spectrum of green visions for the future, with power down playing more or less of a role, it's worthwhile exploring scenarios that span this spectrum.</p>

<p>The following scenario projects very ambitious levels of power down, but it's still in many ways an advanced technological society. It's one where we do fly and drive significantly less but on the other hand we live in housing that is of a far higher standard than today that include MVHR systems and small heat pumps. A large part of the reduction in energy demand in this scenario comes from industry with an assumed 50% reduction compared to 2017 levels - this is inline with energy reduction proportions assumed in the other sectors - but is not based on detailed work.</p>

<p><b>Measures:</b></p>

<ul>
<li>62% reduction in domestic and services lighting and appliance demand</li>
<li>30% reduction in cooking and catering demand</li>
<li>Passivhaus retrofit space heating demand 25 kWh/m2.year (76% reduction)</li>
<li>43% reduction in domestic and services hot water demand</li>
<li>95% heat demand supplied by heatpumps, 5% from elec resistance</li>
<li>200 GWh thermal storage (7 kWh per household)</li>
<li>2500 miles on ebikes</li>
<li>2500 miles via shared EV</li>
<li>Complete electrification of all transport</li>
<li>50% reduction in freight demand, no H2 or synth fuel freight</li>
<li>50% reduction in industry energy demand compared to 2017 levels</li>
<li>200 miles of electric-only flight</li>
<li>50% less EV battery capacity available for smart charging.</li>
<li>50% less industrial demand</li>
<li>200 GWh electricity storage (7 kWh per household)</li>
</ul>

<p><b>Renewable supply requirements:</b></p>

<ul>
<li>62 GW offshore wind, 20 GW onshore wind</li>
<li>5 GW wave, 10 GW Tidal, 2 GW Hydro</li>
<li>62 GW solar pv, ~5 GW solar thermal</li>
<li>2.5 GW geothermal</li>
<li>50 TWh of biomass for biogas</li>
<li>32 GW of backup CCGT</li>
<li>9 GW electrolysis</li>
<li>12,000 GWh hydrogen storage</li>
<li>4 GW methanation capacity</li>
<li>50,000 GWh methane storage</li>
<li>0.88 GW synth fuel production capacity</li>
</ul>

<p>It's worth reflecting that even this ambitious level of power down requires significant renewable supply infrastructure and associated technology, we currently have ~22.3 GW of wind power in the UK, while this scenario would need 82 GW. This is still much less of course than the standard scenario which requires ~164-170 GW (134GW offshore, 30GW onshore).</p>

<hr>

<h3>Less power down ambition</h3>

<p>On the other side of the spectrum we can ask: what is the impact of less behaviour change measures on energy requirements. How much renewable supply do we need if we dont reduce the amount of miles travelled or change the modes of travel - but do still implement full electrification?</p>

<h4>1. Road passenger transport electrification with no modal shift, change in occupancy or reduction in mileage compared to 2016 levels.</h4>

<ul>
<li>150 GW offshore wind up from 134 GW</li>
<li>82 TWh of biomass for biogas up from 74 TWh</li>
<li>121 TWh of biomass for synth fuel up from 113.2 TWh</li>
<li>203 TWh biomass combined</li>
<li>28 GW of electrolysis up from 25 GW</li>
<li>5 GW of methanation capacity</li>
<li>10.1 GW of synth fuel production capacity</li>
<li>Excess 162.7 TWh</li>
<li>Primary energy factor 1.48</li>
<li>Total supply 1222.3 TWh</li>
</ul>

<p>150 GW is a substantial increase from 134 GW, but perhaps not impossible. The Offshore Valuation Group report (2010) estimates that we could produce more than 1,500 TWh/year from floating offshore wind turbines, equivalent to about 400 GW of capacity.</p>

<h4>2. + no reduction in aviation as well</h4>

<p>If we use the fischer tropsh process to generate more synthetic kerosene from biomass and renewable hydrogen we may be able to in theory fuel 3438 miles of aviation per person. However this does not account for the aviation multiplication factor which would require even more carbon sequestration to offset.</p>

<ul>
<li>170 GW offshore wind up from 134 GW</li>
<li>76 TWh of biomass for biogas up from 74 TWh</li>
<li>234 TWh of biomass for synth fuel up from 113.2 TWh</li>
<li>310 TWh biomass combined</li>
<li>40 GW of electrolysis up from 25 GW</li>
<li>5 GW of methanation capacity</li>
<li>19.5 GW of synth fuel production capacity</li>
<li>Excess 162.0 TWh</li>
<li>Primary energy factor 1.53</li>
<li>Total supply 1404.9 TWh</li>
</ul>

<p>We can see that the renewable supply climbs up higher and higher compared to the ZCB standard scenario and compared to more radical power down scenarios as explored above - But the model does not say that these scenarios are impossible either, they just require more renewable infrastructure and associated technology.</p>

<h4>3. No reduction in space heating demand</h4>

<p>No reduction in space heat demand would increase annual space heat demand from 181.9 TWh/yr to 377 TWh/yr. This would result in an increase of 58.5 TWh of electric for heatpumps, 9.8 TWh/yr of electric for resistance heaters and 10.8 TWh/yr of biomass. The additional electric demand would require additional biomass for methane backup.</p>

<ul>
<li>160 GW offshore wind up from 134 GW</li>
<li>100 TWh of biomass for biogas up from 74 TWh</li>
<li>85 GW of backup CCGT capacity up from 45 GW</li>
<li>31 GW of electrolysis up from 25 GW</li>
<li>6 GW of methanation capacity</li>
<li>120,000 GWh of methane storage up from 80,000 GWh</li>
<li>Excess 170 TWh</li>
<li>Primary energy factor 1.43</li>
<li>Total supply 1398 TWh</li>
</ul>

<p>Perhaps the most notable aspect of this scenario is the increase in backup CCGT turbine capacity from 45 GW to 85 GW, resulting from the increased winter time peak load for heatpumps and direct electric heating.</p>

<h4>4. No reduction in space heating demand & direct electric + bivalent gas heating</h4>

<ul>
<li>220 GW offshore wind up from 134 GW</li>
<li>200 TWh of biomass for biogas up from 74 TWh</li>
<li>20 GW of backup CCGT capacity up from 45 GW</li>
<li>50 GW of electrolysis up from 25 GW</li>
<li>10 GW of methanation capacity</li>
<li>280,000 GWh of methane storage up from 80,000 GWh</li>
<li>Excess 197 TWh</li>
<li>Primary energy factor 1.52</li>
<li>Total supply 1486 TWh</li>
</ul>

<hr>

<h3>Gas boilers: Synthetic methane heating using enhanced biogas process</h3>

<p>1. Switch all heatpumps to gas boilers. Heat sources are now 5% elec resistance, 5% biomass and 90% gas boilers at 95% HHV efficiency.</p>

<p>2. The enhanced biogas + sabatier process has a process energy conversion of the following magnitude:</p>

<pre>1.0 TWh of biomass + 0.625 TWh of elec = 1.0 TWh of methane</pre>

<p>Space and water heat demand is ~240 TWh of which our gas boilers will supply 90%. If we assume a high efficiency for gas boilers of 95% HHV this would require 227 TWh of methane, minus the methane that was previously used to produce backup electricity for the heatpumps, which is about 6 TWh of electric or 12 TWh of methane. We therefore need to generate an additional 215 TWh of methane which will require 215 TWh of biomass and 134 TWh of electricity.</p>

<p>3. Adding 215 TWh to the existing 74 TWh of biomass gives 289 TWh. Entering this amount in the supply tab as a starting point and then optimising the electrolysis, synth fuel, methanation, methane store capacity to balance the system while also attempting to reduce the amount of biomass needed suggests to following mix is possible:</p>

<ul>
<li>134 GW offshore wind</li>
<li>255 TWh of biomass for biogas (23.4% of UK land area)</li>
<li>50 GW of electrolysis up from 25 GW</li>
<li>15 GW of methanation capacity up from 5 GW</li>
<li>200,000 GWh of methane storage up from 80,000 GWh</li>
<li>Excess 91 TWh</li>
<li>Primary energy factor 1.54</li>
<li>Total supply 1205.2 TWh</li>
</ul>

<p>We can see that a zero carbon methane gas boiler based heating system is theoretically possible, it requires 3.4x the amount of land for growing biomass for biogas than a heatpump approach would use, twice the electrolysis capacity, 3x the methanation capacity, and 2.5x as much methane storage.</p>

<h3>Gas boilers: Synthetic methane heating using integrated high temperature electrolysis and methanation with direct air capture of CO2 for carbon source.</h3>

<p>An alternative to using co2 sourced from biogas for methanation would be to use direct air capture of CO2. This approach requires less land area for biomass but much more electricity generation capacity. See Store & Go, power to LNG with DAC here <a href="https://learn.openenergymonitor.org/sustainable-energy/energy/sabatier-process">https://learn.openenergymonitor.org/sustainable-energy/energy/sabatier-process</a></p>

<p>215 TWh of methane produced using integrated high temperature electrolysis and methanation with DAC @ 60% efficiency requires 358 TWh of electricity, an equivalent output of 95 GW of offshore wind. Heatpump demand in the standard scenario is responsible for about 30 GW of offshore wind capacity requirement and so we might expect ~65GW of additional offshore wind capacity with this synthetic methane approach.</p>

<ul>
<li>200 GW offshore wind</li>
<li>74 TWh of biomass for biogas (6.8% of UK land area)</li>
<li>17.3 GW of electrolysis down from 25 GW</li>
<li>57 GW of integrated high temperature electrolysis and methanation @ 60% efficiency</li>
<li>200,000 GWh of methane storage up from 80,000 GWh</li>
<li>Excess 144.4 TWh</li>
<li>Primary energy factor 1.62</li>
<li>Total supply 1273.5 TWh</li>
</ul>

<p>Alternatively if the integrated high temperature electrolysis and methanation process is more efficient at 80%, the Helmeth pilot plant has so far achieved 76% efficiency with an expectation to reach over 80% in future (without DAC of CO2).</p>

<ul>
<li>175 GW offshore wind</li>
<li>74 TWh of biomass for biogas (6.8% of UK land area)</li>
<li>18.2 GW of electrolysis down from 25 GW</li>
<li>47 GW of integrated high temperature electrolysis and methanation @ 80% efficiency</li>
<li>200,000 GWh of methane storage up from 80,000 GWh</li>
<li>7.4 GW of synth fuel production capacity</li>
<li>Excess 123.8 TWh</li>
<li>Primary energy factor 1.5</li>
<li>Total supply 1179.0 TWh</li>
</ul>

<h3>Gas boilers: Hydrogen</h3>

<p>An alternative to using methane is to use hydrogen directly. 215 TWh of hydrogen HHV produced at an electrolyser efficiency of 80% requires 269 TWh of electricity, the same amount as an integrated integrated high temperature electrolysis and methanation unit at 80% efficiency, though without the requirement for the DAC CO2 capture component.</p>

<ul>
<li>175 GW offshore wind</li>
<li>50 TWh of biomass for biogas</li>
<li>70 GW of electrolysis</li>
<li>3.0 GW of methanation cap</li>
<li>10.8 GW of synth fuel cap</li>
<li>200,000 GWh of hydrogen storage up from 18,000 GWh</li>
<li>Excess 114.6 TWh</li>
<li>Primary energy factor 1.48</li>
<li>Total supply 1158.1 TWh</li>
</ul>

<h3>Electric resistance heating</h3>

<ul>
<li>175 GW offshore wind</li>
<li>100 GW CCGT backup</li>
<li>130 TWh of biomass for biogas</li>
<li>35 GW of electrolysis</li>
<li>7 GW of methanation cap</li>
<li>9.7 GW of synth fuel cap</li>
<li>200,000 GWh of methane storage up from 80,000 GWh</li>
<li>Excess 172 TWh</li>
<li>Primary energy factor 1.57</li>
<li>Total supply 1236 TWh</li>
</ul>

<h3>Bivalent electric resistance heating with backup gas boilers instead of using CCGT power stations</h3>

<ul>
<li>175 GW offshore wind</li>
<li>20 GW CCGT backup</li>
<li>105 TWh of biomass for biogas</li>
<li>28 GW of electrolysis</li>
<li>7 GW of methanation cap</li>
<li>9.4 GW of synth fuel cap</li>
<li>120,000 GWh of methane storage up from 80,000 GWh</li>
<li>Excess 187 TWh</li>
<li>Primary energy factor 1.54</li>
<li>Total supply 1211 TWh</li>
</ul>

<h3>Biomass boilers</h3>

<ul>
<li>105 GW offshore wind</li>
<li>24 GW CCGT backup</li>
<li>64 TWh of biomass for biogas</li>
<li>203 TWh of biomass for boilers + 40 TWh for other</li>
<li>24 GW of electrolysis</li>
<li>5 GW of methanation cap</li>
<li>9.8 GW of synth fuel cap</li>
<li>Excess 108 TWh</li>
<li>Primary energy factor 1.41</li>
<li>Total supply 1109 TWh</li>
</ul>

<h3>Bivalent heatpumps with backup gas boilers instead of using CCGT power stations</h3>

<ul>
<li>No change to offshore wind</li>
<li>90 TWh of biomass for biogas up from 74 TWh</li>
<li>26 GW of electrolysis up from 25 GW</li>
<li>9.3 GW of synth fuel cap down from 9.4 GW</li>
<li>21 GW CCGT backup down from 45 GW</li>
</ul>

<p>or...</p>

<ul>
<li>138 GW offshore wind up from 134 GW</li>
<li>86 TWh of biomass for biogas up from 74 TWh</li>
<li>9.1 GW of synth fuel cap down from 9.4 GW</li>
<li>21 GW CCGT backup down from 45 GW</li>
</ul>

<h3>Hydrogen cars & vans</h3>

<p>1. Modify all ground transport hydrogen proportions to 90% and EV’s to 4%.</p>

<p>2. Modify aviation from 20% electric to 20% hydrogen.</p>

<p>3. Move freight BEV demand of 10 TWh/yr to 20 TWh/yr freight hydrogen demand, reflecting fuel cell efficiency.</p>

<p>4. Change total usable EV battery capacity for smart charging to 23 GWh.</p>

<p>Hydrogen demand for transport is now 153.9 TWh/yr up from 9.6 TWh/yr and electric transport 4.7 TWh/yr down from 71 TWh/yr. Producing this amount of hydrogen would require 192 TWh of electricity, doubling the amount of electricity required for transport compared to the battery electric vehicle approach and roughly equivalent to the output of 52 GW of offshore wind.</p>

<p>5. Navigate to ‘Stores’ tab, notice how the stores are all depleted very quickly in 2002. We need increase renewable electricity supply and adjust the hydrogen, synth fuel & methane capacity levels to ensure that sufficient levels of each are generated.</p>

<p>3. As a starting point increase offshore wind by 52 GW to 186 GW and increase electrolysis capacity to 50 GW. The model is mostly balanced at this point but we are over filling the methane store and seeing brief periods where the hydrogen store is empty.</p>

<p>4. Try reducing biomass for biogas to 56 TWh to bring the methane store levels down.</p>

<p>5. We are still over producing synth fuel, reduce its capacity to 9.0 GW to bring synth fuel levels down so that the end level is closer to the starting level. The hydrogen store is also still empty for 0.1% of the time, increasing the electrolysis capacity to 53 GW sorts this out.</p>

<p>This scenario results in a lot of excess energy ~214 TWh, can we make better use of it? What if we increase hydrogen storage and reduce renewable supply? 170 GW of offshore wind, 58 TWh of biomass for biogas, 40,000 GWh of hydrogen storage and 9.6 GW of synth fuel production capacity would also work and results in a lower 163 TWh of excess generation & primary energy factor of 1.47</p>

<p>Reducing offshore wind supply further to 160 GW would require 57 GW of electrolysis, 61 TWh of biomass for biogas and 10.1 GW of synth fuel production. Excess generation would be 128 TWh.</p>

<ul>
<li>160 GW offshore wind</li>
<li>45 GW CCGT backup</li>
<li>61 TWh of biomass for biogas</li>
<li>57 GW of electrolysis</li>
<li>5 GW of methanation cap</li>
<li>10.1 GW of synth fuel cap</li>
<li>40,000 GWh of hydrogen storage up from 18,000 GWh</li>
<li>30,000 GWh of methane storage down from 80,000 GWh</li>
<li>Excess 128 TWh</li>
<li>Primary energy factor 1.43</li>
<li>Total supply 1233 TWh</li>
</ul>

<p>The model suggests its possible to power transport with hydrogen with a large increase in hydrogen electrolysis capacity from 25 GW to 57 GW, an increase in hydrogen storage from 18,000 GWh to 40,000 GWh and an increase in offshore wind capacity from 134 GW to 160 GW. Biomass for biogas is reduced from 74 TWh to 61 TWh and methane storage from 80,000 GWh to 30,000 GWh.</p>

<h3>A large battery instead of power to gas</h3>

<p>How large a battery would be needed per household to remove the need for the power to gas and CCGT turbine backup?</p>

<p>Set CCGT capacity to zero and biomass for biogas to 52 TWh and synth fuel production capacity to 10.2 GW. Select 'Basic, flat out' under electricity storage type. Increase the charge rate to 100 GW and increase the store size until final supply demand matching reaches 99.914%.</p>

<ul>
<li>4100 GWh of battery storage (137 kWh per household)</li>
<li>134 GW offshore wind</li>
<li>0 GW CCGT backup</li>
<li>52 TWh of biomass for biogas for industrial demand</li>
<li>23 GW of electrolysis</li>
<li>3 GW of methanation cap</li>
<li>10.2 GW of synth fuel cap</li>
<li>Excess 152.4 TWh</li>
<li>Primary energy factor 1.43</li>
<li>Total supply 1124.3 TWh</li>
</ul>

<p>Notice how on the stores tab the battery store in dark blue is only emptied about 7 times in 10 years. The longest period lasts for 48h in December 2011. If it was possible to turn off a large proportion of industrial electricity demand in these short time frames the amount of storage required would likely be reduced further.</p>

<p>Increasing the industrial DSR switching of electric to gas at times of low electricity supply to the full extent of high and low temp heat demand reduces the store size requirement to 3550 GWh or 118 kWh per household.</p>

<h3>Industry energy consumption in line with DECC projections in 2017</h3>

<p><a href="https://assets.publishing.service.gov.uk/government/uploads/system/uploads/attachment_data/file/671187/Updated_energy_and_emissions_projections_2017.pdf">Updated_energy_and_emissions_projections_2017.pdf</a></p>

<p>Figure 4.2 suggests overall industry energy demand falling to ~20 Mtoe (233 TWh) by 2033. The ZCB scenario projects a higher 287 TWh of industry consumption in 2030 perhaps allowing for some onshoring of industrial energy demand. Industrial energy use is dealt with in the scenario at a high level and a cautious approach is taken. Industry energy demand is an area highlighted for further research within the ZeroCarbonBritain scenario.</p>

<p>What if we use the DECC figure reducing ZCB industry demand by 20%?</p>

<ul>
<li>115 GW of offshore wind down from 134 GW</li>
<li>25 GW of onshore wind down from 30 GW</li>
<li>64 TWh of biomass for biogas down from 74 TWh</li>
</ul>

<hr>

<h3>Different Supply Scenarios</h3>

<h4>100% renewable, No use of biomass energy</h4>

<p>Biomass energy provides ~22% of the ZeroCarbonBritain energy supply using about 4 Mha (or ~16.5%) of the UK land area. 

<ul>
<li>0.8 Mha (3.3%) is used to grow rotational grasses for anaerobic digestion. This biogas is then upgraded using hydrogen from excess electricity generation to produce synthetic methane, which is then used to backup the electricity system and fuel high temperature processes in industry.</li>
<li>1.7 Mha (7.1%) is used to grow short rotation coppice and miscanthus, used to create synthetic liquid fuels for aviation and long distance shipping and freight via the fischer tropsch process.</li>
<li>1.5 Mha (6.2%) is used to grow short rotation forestry and short rotation coppice for direct biomass heat.</li>
</ul>

<p>Through dietary change the ZeroCarbonBritain scenario is able to free up enough land to both provide enough land for biomass energy and additional land for carbon sequestration, whilst providing a greater proportion of our food than we do today and increasing the amount of land for biodiversity. The scenario restores ~1 MHa of peatland, increases the amount of unharvested forest from ~0.35 MHa to ~2.0 Mha and increases other unmanaged/conserved land by about 0.5 Mha. All together these additions provide ~3.2 Mha of additional wild land.</p>

<p>We could however increase the amount of unmanaged or conserved land further if we did not use land for biomass energy whilst maintaining the same dietary changes proposed by ZCB. We could more than double the land area in the scenario up to ~7 Mha or 30% of the total UK land area.</p>

<p>If we do not use biomass energy in the scenario and do not change the demand side we have to increase energy supply from other sources to make up for the short fall. The biomass energy is also providing a source of carbon for synthetic fuels so we either need to produce and use fuels that don’t contain carbon such as hydrogen rather than synthetic methane and ammonia rather than synthetic diesel/kerosene, or/and we need to capture CO2 from the air and develop a carbon capture and utilisation system to recycle carbon in the energy system. These non-biomass pathways appear to be being discussed more and more and so may well become the preferred approach rather than relying on biomass energy, they do however require quite a bit more zero carbon electricity to drive their processes as the following scenarios show:</p>

<p>1. Remove biomass from the model:</p>

<ul>
<li>Replace 5% biomass heat heat pumps.</li>
<li>Replace 20% heating and drying industrial biomass with DSR direct electric/synth-methane.</li>
<li>Replace 5.58 TWh of biomass for non heat process with synth-methane.</li>
<li>Remove the 74 TWh of biomass for biogas.</li>
<li>Remove biomass fischer tropsch process.</li>
</ul>

<p>2. Biomass originally provided 227.5 TWh of energy, to replace this with offshore wind would require an additional 60 GW. This would increase the total offshore wind capacity from 134GW to 194GW. We will use this as a starting point, we can reduce this if we go for more power-to-X conversion capacity. A cost optimisation would need to be done to find the optimum point.</p>

<p>3. Reducing electrolysis capacity to 1.7 GW down from 25 GW, reducing biomass synth fuel capacity down to 0 GW from 9.4 GW, reducing methanation capacity to 0 from 5 GW and then increasing integrated electrolysis & DAC power-to-X processes to 46.5 GW produces all fuel requirements and balances supply and demand on the electricity system. 37.7 GW of electrolysis and biomass conversion processes are replaced with 46.5 GW of power-to-X with integrated direct air capture.</p>

<p>4. The total amount supply is up 0.5% on the main ZCB scenario whilst the excess generation is up 35 TWh at 183 TWh. We could reduce the capacity of offshore wind and increase the power-to-X capacity to match the amount of excess generation in the ZCB scenario. This would result in needing 184 GW of offshore wind and 50 GW of power-to-X capacity.</p>


<h4>5GW of Nuclear</h4>

<p>If Hinkley C is completed we will have 3.2 GW of nuclear capacity in 2023. By 2030 planned closures of older plants will mean that we have 4.4 GW of remaining nuclear capacity, reducing to 3.2 GW in 2035. What is the effect of maintaining 5 GW of nuclear capacity on the ZCB renewable energy capacity requirements?</p>

<p>5 GW of nuclear at 90% availability would generate 39 TWh of electricity, if we reduce offshore wind by the equivalent amount of output the capacity of offshore wind would drop from 134 GW to 123.7 GW (10.3 GW less). There are also further nock-on effects in terms of reduced requirements for balancing services:</p>

<ul>
<li>Biomass for biogas can be reduced from 74 TWh/yr to 68 TWh/yr.</li>
<li>Backup CCGT gas turbine capacity can be reduced from 45 GW to 42 GW (3GW less).</li>
<li>Electrolysis capacity can be reduced from 25 GW to 23 GW (2GW less).</li>
<li>Methane storage capacity can be reduced by ~10% (5000 GWh)</li>
<li>Methanation and liquid fuel production capacity can both be reduced by 0.4 GW and 0.25 GW respectively</li>
</ul>

<p>Alternatively if we try to minimise offshore wind capacity as much as possible without reducing balancing services capacities so much, another option could be:</p>

<ul>
<li>115 GW of offshore wind down from 134 GW (19 GW less)</li>
<li>72 TWh/yr of biomass for biogas down from 74 TWh/yr</li>
<li>44 GW of backup CCGT down from 45 GW</li>
<li>9.6 GW of synth fuel capacity up from 9.4 GW</li>
<li>30 TWh/yr less excess/curtailed generation</li>
</ul>

<i>There will also be a likely reduction in transmission capacity that is not covered in the model.</i>

<p>Without a detailed cost model it's hard to say exactly what the implications are of these different configurations. In the example where we minimize offshore wind capacity, we remove 72 TWh/yr of offshore wind and replace it with 39 TWh/yr of nuclear. As a first order estimate we can see that if offshore wind cost £40/MWh, nuclear would need to be (72 TWh/yr x £40/MWh) / 39 TWh/yr = £74/MWh to be competitive. Including the 2 TWh/yr of reduced biomass for biogas at £40/MWh as well would increase the price nuclear would need to reach to be competitive to £76/MWh.</p><p>These are very rough back of the envelope figures, but they do illustrate that focusing on the strike price of a single generation technology in isolation does not capture the implications for total system costs.</p>

<h4>19.25 GW of Nuclear</h4>

<p>If in addition to Hinkley C (3.2 GW) and Sizewell B (1.2 GW), we had further new build nuclear including: Sizewell C (3.2GW), Wylfa Newydd (2.7GW), Bradwell B (2.2GW) and 15x 450 MW Rolls Royce small modular reactors, this would add up to a total of 19.25 GW. At 90% capacity factor this would generate 152 TWh/yr of electricity. What effect would increasing nuclear capacity by this amount have on the ZCB renewable energy capacity requirements?</p>

<p><b>1. Reducing offshore wind output by 152 TWh/yr:</b></p>

<ul>
<li>93.8 GW of offshore wind down from 134 GW (40.2 GW less)</li>
<li>55.3 TWh of biomass for biogas down from 74 TWh (18.7 TWh less)</li>
<li>19 GW of electrolysis down from 25 GW (6 GW less)</li>
<li>10,000 GWh of hydrogen storage (33% less)
<li>3.8 GW of methanation capacity down from 4.4 GW</li>
<li>8.4 GW of synth fuel cap down from 9.4 GW</li>
<li>33.8 GW of backup CCGT down from 45 GW (11.2 GW less)</li>
<li>Methane store 40,000 GWh down from ~52,000 GWh</li>
<li>Excess 148.3 TWh (0.1 TWh more)</li>
<li>Primary energy factor 1.43</li>
<li>Total supply 1126.3 TWh (19.6 TWh less)</li>
</ul>

<p><b>2. Minimising offshore wind output:</b></p>

<ul>
<li>73 GW of offshore wind down from 134 GW (61 GW less)</li>
<li>64 TWh of biomass for biogas down from 74 TWh (10 TWh less)</li>
<li>25 GW of electrolysis (no change)</li>
<li>3.8 GW of methanation capacity down from 4.4 GW</li>
<li>9.7 GW of synth fuel cap up from 9.4 GW</li>
<li>37.4 GW of backup CCGT down from 45 GW (7.6 GW less)</li>
<li>Methane store 52,000 GWh (no change)</li>
<li>Excess 74.7 TWh (73.5 TWh less)</li>
<li>Primary energy factor 1.35</li>
<li>Total supply 1056.7 TWh (89.2 TWh less)</li>
</ul>

<p>In the second example we replace 231 TWh/yr of offshore wind with 152 TWh/yr of nuclear. Repeating our first order estimate above, we can see that if offshore wind cost £40/MWh, nuclear would need to be (231 TWh/yr x £40/MWh) / 152 TWh/yr = £61/MWh to be competitive. Including the 10 TWh/yr of reduced biomass for biogas at £40/MWh as well would increase the price nuclear would need to reach to be competitive to £63/MWh. There is also a substantial 8GW reduction in backup CCGT capacity and likely differences in grid transmission capacities that would need to be included in a more detailed calculation.</p>

<h4>100% nuclear</h4>

<p>The following extend the zero biomass scenario developed for the 100% renewable case above to a 100% nuclear scenario, using power-to-X and direct air capture to create the synthetic fuels used in the energy system.</p>

<p>Setting all renewable capacities to zero and keeping the power-to-X capacity at 50GW requires 99.6 GW of nuclear to provide all energy demand (at 90% capacity factor). We can also remove the 45GW of backup CCGT gas turbines completely and reduce electrolysis capacity from 1.7 GW to 1.4 GW. The excess generation is only 2 TWh as the nuclear supply is able to make better use of the 50GW of power-to-X capacity.</p>

<p>The 83 GW of constant delivered electricity is always above the peak winter time electricity demand, the summer time excess of electricity generation is soaked up by the power-to-X processes, producing synthetic fuels whenever electricity demand is lower than the constant nuclear supply. There is no load following required and the nuclear plants can run at their most economic capacity factor at all times.</p>

<p>The total amount of energy supply is 23% lower than the renewable scenario reflecting the more complete use of the generated energy. This suggests that the overall nuclear energy cost can be 23% higher than the combined cost of the renewable supply to break even, e.g £65/MWh rather than £50/MWh, or £52/MWh rather than £40/MWh.</p>

<p>99.6 GW of nuclear supply would require 31x Hinkley Point C sized plants, or roughly double to total number of nuclear sites both operational and closed in the UK at present. It's likely that this scenario could be optimised further to require less nuclear capacity if a portion of the waste heat from nuclear plants could be utilised to improve the efficiency of the power-to-X processes including direct air capture.</p>

<h4>Solar Max</h4>

<p>What if we went all out for solar rather than offshore wind? The following scenario replaces the same quantity of electricity that is generated by offshore wind (507 TWh) in the ZeroCarbonBritain scenario with additional Solar PV capacity.</p>

<ul>
<li>703 GW of Solar PV replaces 134 GW of offshore wind (includes original 90 GW of Solar PV), total output is the same.</li>
<li>213 TWh of biomass for biogas up from 74 TWh (139 TWh more)</li>
<li>95 GW of electrolysis up from 25 GW</li>
<li>14 GW of methanation capacity up from 4.4 GW</li>
<li>18.4 GW of synth fuel cap up from 9.7 GW</li>
<li>67 GW of backup CCGT up from 45 GW (22 GW more)</li>
<li>180,000 GWh of methane storage up from 50,000 GWh</li>
<li>60,000 GWh of hydrogen storage up from 18,000 GWh</li>
<li>600 GWh of battery storage up from 50 GWh</li>
<li>Excess 139.8 TWh (8.1 TWh less)</li>
<li>Primary energy factor 1.63</li>
<li>Total supply 1281.4 TWh</li>
</ul>

<p>703 GW of solar PV is equivalent to 24 kW per household. This seems unlikely, however perhaps it represents what might happen if the price of solar reduced so much to be printable on every surface? or if the efficiency of solar was to increase substantially? The implications of using the ZCB technology stack in a solar max scenario however results in substantial increases in biomass for biogas, electrolysis and synth fuel capacities, alongside storage and backup generation capacity. Alternatively, battery storage would need to reach capacities of ~2200 kWh per household equivalent to provide the significant inter-seasonal storage required. Additional solar would be required if a zero-biomass route was taken.</p>

