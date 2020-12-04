## title: Assessments: Study
### published: 2018-07-28

![study.png](images/project2/study.png)

**Calculation notes:**

- Stone walls, thermal conductivity 0.935 W/m.K
    - ~0.70m thick, U-value: 1.3 W/K.m2
    - ~0.75m thick, U-value: 1.2 W/K.m2
    - ~0.80m thick, U-value: 1.2 W/K.m2
    - ~2.00m thick, U-value: 0.5 W/K.m2
    
- Timber walls
    - 0.09m thick

- Single glazing: 4.8 W/K.m2

- Floor

- Roof/ceiling

**Heat loss calculation:**

Room by room heat loss calculation is based on the MCS Heat Pump Calculator that implements the EN12831 heat loss calculation standard.

<script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
<script type="text/javascript" src="lib/heatlossjs/config_new.js?v=1"></script>
<script type="text/javascript" src="files/project2/study_data.js"></script>
<link rel="stylesheet" type="text/css" href="lib/heatlossjs/style.css?v=1" />
<script type="text/javascript" src="lib/heatlossjs/model.js?v=1"></script>
<div id="heatloss"></div><script>heatloss.init("#heatloss")</script>
