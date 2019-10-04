## title: ZCB Energy Conversion Summary
### published: 2019-10-04

In order to balance supply and demand on a weekly to monthly basis the ZeroCarbonBritain scenario makes use of electrolysis and power to gas to backup the electricity system, it also uses power to gas and power to liquids for various industrial and transport energy demands that are not fully electrified.

**Key assumptions and model equations**

### Electrolysis

See [Hydrogen electrolysis](zcb_hydrogen)

Nel hydrogen electrolysers: 80.5% to 93.3% HHV, 68.1% to 78.8% LHV.
Electrolyser efficiency of 80% HHV assumed and stored hydrogen in GWh HHV.
No losses accounted for in compression and transport before bulk storage – assumes low pressure storage near electrolyser site.

    electrolysis_efficiency = 0.8
    H2_produced = electricity_for_electrolysis * electrolysis_efficiency

### Biogas

Anaerobic digestion of rotational grasses and other biomass inputs produces a gas mixture of mainly methane and CO2, called biogas. Anaerobic digestion is typically ~50-60% efficient and the volumetric or molar proportion of CH4 to CO2 is 60/40 or 65/35. Assumed 60/40 here.

Energy density of methane is 15.4 kWh/kg HHV

    anaerobic_digestion_efficiency = 0.5747
    co2_tons_per_gwh_methane = (1000.0/15.4)*((0.40*44.009)÷(0.60*16.0425))

    biogas_supply = hourly_biomass_for_biogas * anaerobic_digestion_efficiency
    methane_from_biogas = biogas_supply
    co2_from_biogas = co2_tons_per_gwh_methane * biogas_supply

Is the efficiency of the AD process directly proportional to CH4/CO2 proportion? E.g 60% efficiency of AD produces 60/40 proportions? If the AD was 100% efficient it would convert all carbon atoms to methane molecules, at 60% efficiency 60% of carbon atoms get used as part of methane molecules.

### Power to Gas: Sabatier (non integrated electrolysis)

See [Sabatier process](zcb_sabatier_process)

The original implementation of power to gas in ZeroCarbonBritain used biogas as the only CO2 source for methanation. In order to enable more flexibility the following proposes a intermediary CO2 feed and potential storage.

    Sabatier: CO2 + 4H2 → CH4 + 2H2O
    Methane HHV: 889 kj/mol
    Hydrogen HHV: 286 kj/mol, 4H2 = 1144 kj/mol
    Molar mass of methane: 16.0425 g/mol
    Molar mass of hydrogen: 2.01588 g/mol
    Molar mass of co2: 44.009 g/mol

    co2_for_sabatier = co2_from_biogas
    hydrogen_for_sabatier = co2_for_sabatier * (8.064/44.009) * 39.4 * 0.001
    methane_from_sabatier = hydrogen_for_sabatier * (889.0/1144.0)

The old model was based on:

    AD_efficiency = 0.57
    biogas_to_h2_ratio = 1.2
    methanation_efficiency = 0.8

    1.0 kWh biomass = 0.57 kWh of biogas = 0.57 kWh of methane
    0.57 kWh of biogas requires 0.475 kWh of hydrogen, producing 0.38 kWh of methane.

    1.0 kWh biomass + 0.475 kWh of H2 = 0.94 kWh methane

The new implementation:

    1.0 kWh of biomass = 0.6 kWh of biogas (+71 g co2)
    71 g co2 + 0.514 kWh hydrogen for sabatier = 0.4 kWh of methane (78% eff)
    1.0 kWh of biomass + 0.514 kWh of hydrogen = 1.0 kWh of methane

I think the main difference is lower methane content in biogas?<br>
Hydrogen and methane energy quantities are all HHV.

### Power to Gas, Integrated High-Temperature Electrolysis and Methanation

Pilot projects include Helmeth ~76% efficiency and Store & Go ~59% efficiency<br>
Assuming integrated DAC (uses heat recovery, store & go example). Lets say average efficiency 60%.

    IHTEM_efficiency = 0.60
    methane_from_IHTEM = electricity_for_IHTEM * IHTEM_efficiency

### Hydrogen vehicle demand

Starting with a mechanical efficiency of 0.031 kWh/p.km and then applying a fuel cell vehicle efficiency 90% + fuel cell efficiency 55% + transport 80% + compression 90%, results in a total hydrogen demand of 0.086 kWh/p.km (at max occupancy).

Comparing this with real-world figures for a Hyundai NEXO with a 6.3 kg tank and a WLTP range of 666 km suggests 0.373 kWh/km HHV or 0.0746 kWh/p.km. Including transport and compression would raise this to 0.104 kWh/p.km. The NEXO is an SUV and so you would expect the fleet average to be lower and so our assumed 0.086 kWh/p.km HHV may be realistic.

### Methane for heat

Condensing gas boiler efficiency of 90% HHV assumed.<br>
Viessmann Vitodens 050-W achieves a max 97% (Hs) [gross cv] HHV

### Methane for CCGT

1. [Wikipedia: Best-of-class baseload CCGT efficiency: 54% HHV, 60% LHV](https://en.wikipedia.org/wiki/Combined_cycle_power_plant#Difference_between_HHV_and_LHV)
2. [Wartsila.com: Shows several CCGT turbines with efficiency of between 46% part load and 55% full load HHV](https://www.wartsila.com/energy/learn-more/technical-comparisons/combustion-engine-vs-gas-turbine-part-load-efficiency-and-flexibility)
3. [GE.com discussion of base load vs flexible plants](https://www.ge.com/power/transform/article.transform.articles.2018.jan.evolution-of-combined-cycle-pe)
4. [Auroraer.com: Increased use of gas reciprocating engines which are lower efficiency 44.4% LHV](https://www.auroraer.com/wp-content/uploads/2019/05/The-Value-of-High-Efficiency-Gas-Engines-Aurora.pdf)
5. [Controleng.com: High efficiency flexible CCGT](https://www.controleng.com/articles/high-efficiency-gas-turbines-add-new-flexibility)
6. [Siemens.com: Siemens 8000H combined cycle efficiency of 61% (LHV)](https://new.siemens.com/global/en/products/energy/power-generation/gas-turbines/sgt5-8000h.html)
7. [Worldenergy.org: Clarification of LHV vs HHV for siemens 8000H](https://www.worldenergy.org/wp-content/uploads/2014/03/EE-Technologies-ANNEX-III-Energy-Efficient-Solutions-for-Thermal-Power-Solutions.pdf)

Conclusion is that assuming 50% HHV efficiency for flexible CCGT gas turbines is realistic given 54% efficiency HHV at full load for most efficient CCGT and minus about 9% for part load. It looks like its in the right ball park.

    CCGT_efficiency = 0.5
    CCGT_electricity = CCGT_efficiency x CCGT_methane

### Synth fuel production

See [Fischer Tropsch](zcb_fischer_tropsch)

    1.3 kWh biomass + 0.61 kWh hydrogen = 1.0 kWh synth fuel
    1.3 kWh biomass + 0.76 kWh electric = 1.0 kWh synth fuel

    FT_process_biomass_req = 1.3   // GWh/GWh fuel
    FT_process_hydrogen_req = 0.61 // GWh/GWh fuel

    hydrogen_to_synth_fuel = (hourly_biomass_for_biofuel/FT_process_biomass_req)*FT_process_hydrogen_req

    synth_fuel_produced = hydrogen_to_synth_fuel / FT_process_hydrogen_req

### Methane fuel cells?

Not currently included. Technology for further research.

### Reversible SOEC SOFC?

Not currently included. Technology for further research.

### Ammonia storage

Not currently included. Technology for further research.

