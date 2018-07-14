## title: Reading historic weather station data from wow.metoffice
### published: 2017-12-30

The heatloss calculation for heating system sizing is based on either designing the system to meet the heat loss at a minimum external temperature. The heat pump calculation standard requires that the outside temperature taken is either option A: *Hourly dry-bulb temperature equal or exceeded for 99.0% of the hours in a year* but with a 20% uplift factor or B: *Hourly dry-bulb temperature equal or exceeded for 99.6% of the hours in a year* without a 20% uplift factor.

The nearest city in the table to our location is Manchester which exceeds -2.2C for 99.0% of hours and -3.6C for 99.6% of hours. Manchester is however 82 miles inland from our location and may be colder due to its distance from the sea.

I wanted to see if I could use weather data from local weather stations to calculate the equivalent minimum temperatures closer to where we live. I was familiar with the Weather Observations Website (WOW) from the Met Office from another project and so I thought I would start by trying to use data from this site.

The Weather Observations Website includes both official met office owned weather stations and enthusiast stations uploaded as part of a open community initiative by the Met Office.

![wowweatherdata.png](images/wowweatherdata.png)

I've put together a script to download and import particular weather station data into emoncms and another script to calculate the temperatures outlined above. Details on how to use the scripts are included below.

House altitude: 110m

### Results

**Capel Curig, North Wales, UK, site id: 7003** 
<br>Met Office Owned Site, ALT: ~211m

    A: 99.0%: -2.1C
    B: 99.6%: -3.4C

**Valley, North Wales, UK, site id: 1033**
<br>Met Office Owned Site, ALT: ~11m

    A: 99.0%: +0.1C
    B: 99.6%: -0.8C

**Aberdaron, North Wales, UK, site id: 22595747**
<br>Met Office Owned Site, ALT: ~77m

    A: 99.0%: +1.3C
    B: 99.6%: +0.2C

**Douglas Arms Bethesda, North Wales, UK (5 miles away), site id: 17538268, 5 years data, ALT:143m**
<br>Enthusiast contributor

    A: 99.0%: +1.0C
    B: 99.6%: +0.1C

**Nantlle, North Wales, UK (6 miles away), site id: 178734, 4 years data, ALT:104m**
<br>Enthusiast contributor

    A: 99.0%: +0.0C
    B: 99.6%: -1.2C

**Carmel, North Wales, UK (6 miles away), site id: 40995072, (2 years data), ALT:223m**
<br>Enthusiast contributor

    A: 99.0%: +0.7C
    B: 99.6%: -0.1C
    


### How to use this tool

### Imporing wow data:

**1. Download:**

[https://github.com/TrystanLea/wowreader]([https://github.com/TrystanLea/wowreader)

or clone with git:

    git clone https://github.com/TrystanLea/wowreader.git
    
**2. Configure import script:**

The *import_wow.php* script is designed to be run on the same machine/host as the emoncms installation hence the default setting of *http://localhost/emoncms*, it can also be run with a remote server although less advised due to high request rate when importing years of data. 

Enter the apikey of the emoncms account to import the weather data into and the site id of the weather station which can be found on the wow.metoffice site:

    // Send data to emoncms account
    $emoncmshost = "http://localhost/emoncms";
    $apikey = "EMONCMS_APIKEY";
    
    // Douglas Arms Bethesda, North Wales, UK
    $siteid = 17538268;

The script imports the data into emoncms feeds using the PHPFina feed engine, the script assumes that the data directory is located at /var/lib/phpfina/ (set on line 23). If your using the script on an emonpi or emonbase the data directory is /home/pi/data/phpfina/.

    $phpfina = new PHPFina(array("datadir"=>"/var/lib/phpfina/"));
    
**3. Run import script:**

Run from command line on linux with:

    sudo php import_wow.php
    
### Calculate minimum temperature exceeded for both 99.6% and 99.0% of hours.

Also included in the wowreader repository is a script that runs through the imported outside temperature feed in order to calculate the minimum temperature exceeded for both 99.6% and 99.0% of hours. The script is called *calc_prc_above_temperature.php*.

To configure, open the script in an editor and change the following two lines, $datadir should match the data directory noted above for PHPFina feeds. The feedid is the feed id of the outside temperature feed:

    $datadir = "/var/lib/phpfina/";
    $feedid = 90;

Run from command line on linux with:

    sudo php calc_prc_above_temperature.php

The result should look something like this:

    $ php calc_prc_above_temperature.php 
    0.9966 -1.3
    0.9963 -1.2
    0.9907 -0.1
    0.9903 0
    
This example indicates that the temperature exceeded for 99.6% of the time is -1.2C. While the temperature is above 0C for 99.0% of the time.
    

