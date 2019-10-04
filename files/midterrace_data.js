var T = {
    external: -3.0,
    ground: 10.0,
    unheated: 10.0
}

var element_type = {
  "Floor:Ground": { uvalue:1.0 },
  "Floor:InsulatedGround": { uvalue:0.32 },
  "Floor:First": { uvalue:1.7 },
  "Floor:Loft": { uvalue:0.18 },
  "Wall:External": { uvalue:1.7 },
  "Wall:Internal": { uvalue:1.7 },
  "Wall:Party": { uvalue:0.5 },
  "Glazing:Double": { uvalue:3.1 }
}

var rooms = {
 "livingroom":{
    temperature: 21.0,
    width: 3.4, 
    length: 6.8, 
    height: 2.4,
    air_change_an_hour: 1.5,
 
    elements: [
      {
        type:"Wall:External", 
        orientation:"South", 
        width:3.4, height:2.4
      },
      { 
        type:"Wall:Party", 
        orientation:"West", 
        width:6.8, height:2.4,
        boundary:'unheated'
      },
      { 
        type:"Wall:External", 
        orientation:"North", 
        width:1.6, height:2.4
      },
      { 
        type:"Wall:Internal", 
        orientation:"East", 
        width:6.8, height:2.4,
        boundary:'hall'
      },
      { 
        type:"Floor:InsulatedGround", 
        width:6.8, height:3.4,
        boundary:'ground'
      },
      { 
        type:"Floor:First",
        width:6.8, height:3.4,
        boundary:'bed2'
      },
      {
        type:"Glazing:Double",
        subtractfrom:0,
        width:1.8, height:1.6
      },
      {
        type:"Glazing:Double",
        subtractfrom:2,
        width:1.0, height:1.5
      }
    ],

    radiators: [
        {name:"Double Panel Convector 1200x600"},
        {name:"Double Panel Convector 1200x600"},
        {name:"Double Panel Convector 1200x600"}
        //{name:"Dimplex SmartRad SRX180 Fan:2, 300L/h"}
    ]
  },
  
 "hall":{
    temperature: 18.0,
    width: 1.0, 
    length: 6.8, 
    height: 2.4,
    air_change_an_hour: 2.0,
    
    elements: [
      {
        type:"Wall:External", 
        orientation:"South", 
        width:1.0, height:2.4
      },
      { 
        type:"Wall:Internal", 
        orientation:"West", 
        width:6.8, height:2.4,
        boundary:'livingroom'
      },
      { 
        type:"Wall:Internal", 
        orientation:"North", 
        width:1.0, height:2.4,
        boundary:'livingroom'
      },
      { 
        type:"Wall:Party", 
        orientation:"East", 
        width:6.8, height:2.4,
        boundary:'unheated'
      },
      { 
        type:"Floor:Ground", 
        width:6.8, height:1.0,
        boundary:'ground'
      },
      { 
        type:"Floor:First",
        width:6.8, height:1.0,
        boundary:'study'
      },
      {
        type:"Glazing:Double",
        subtractfrom:0,
        width:0.8, height:1.9
      }
    ],
    
    radiators: [{name:"Double Panel Convector 1200x600"}]
  },
  
 "kitchen":{
    temperature: 18.0,
    width: 2.4, length: 3.0, height: 2.4,
    air_change_an_hour: 2.0,
    
    elements: [
      { 
        type:"Wall:Internal", 
        orientation:"South", 
        width:2.4, height:2.4,
        boundary:'livingroom'
      },
      { 
        type:"Wall:External", 
        orientation:"West", 
        width:3.0, height:2.4
      },
      { 
        type:"Wall:External", 
        orientation:"North", 
        width:2.4, height:2.4
      },
      { 
        type:"Wall:Party", 
        orientation:"East", 
        width:3.0, height:2.4,
        boundary:'unheated'
      },
      { 
        type:"Floor:Ground", 
        width:3.0, height:2.4,
        boundary:'ground'
      },
      { 
        type:"Floor:First",
        width:3.0, height:2.4,
        boundary:'bathroom'
      },
      {
        type:"Glazing:Double",
        subtractfrom:1,
        width:0.9, height:1.3
      },
      {
        type:"Glazing:Double",
        subtractfrom:1,
        width:0.8, height:1.9
      }
    ],
    
    radiators: [{name:"Double Panel Convector 800x600"}]
  },
  
 "bed1":{
    temperature: 18.0,
    width: 3.0, length: 3.5, height: 2.4,
    air_change_an_hour: 1.0,
    
    elements: [
      { 
        type:"Wall:Internal", 
        orientation:"South", 
        width:3.0, height:2.4,
        boundary:'bed2'
      },
      { 
        type:"Wall:Party", 
        orientation:"West", 
        width:3.5, height:2.4,
        boundary:'unheated'
      },
      { 
        type:"Wall:External", 
        orientation:"North", 
        width:1.6, height:2.4
      },
      { 
        type:"Wall:Internal", 
        orientation:"North", 
        width:1.4, height:2.4,
        boundary:'bathroom'
      },
      { 
        type:"Wall:Internal", 
        orientation:"East", 
        width:3.5, height:2.4,
        boundary:'landing'
      },
      { 
        type:"Floor:First", 
        width:3.0, height:3.5,
        boundary:'livingroom'
      },
      { 
        type:"Floor:Loft",
        width:3.0, height:3.5
      },
      {
        type:"Glazing:Double",
        subtractfrom:2,
        width:0.9, height:1.3
      }
    ],
    
    radiators: [{name:"Double Panel Convector 1200x500"}]
  },
  
 "bed2":{
    temperature: 18.0,
    width: 2.6, length: 3.2, height: 2.4,
    air_change_an_hour: 1.0,
    
    elements: [
      { 
        type:"Wall:External", 
        orientation:"South", 
        width:2.6, height:2.4
      },
      { 
        type:"Wall:Party", 
        orientation:"West", 
        width:3.2, height:2.4,
        boundary:'unheated'
      },
      { 
        type:"Wall:Internal", 
        orientation:"North", 
        width:2.6, height:2.4,
        boundary:'bed1'
      },
      { 
        type:"Wall:Internal", 
        orientation:"East", 
        width:3.2, height:2.4,
        boundary:'landing'
      },
      { 
        type:"Floor:First", 
        width:2.6, height:3.2,
        boundary:'livingroom'
      },
      { 
        type:"Floor:Loft",
        width:2.6, height:3.2
      },
      {
        type:"Glazing:Double",
        subtractfrom:"32",
        width:0.9, height:1.3
      }
    ],
    
    radiators: [{name:"Double Panel Convector 1200x500"}]
  },
  
 "study":{
    temperature:21.0,
    width: 1.8, length: 2.2, height: 2.4,
    air_change_an_hour: 1.5,
    
    elements: [
      { 
        type:"Wall:External", 
        orientation:"South", 
        width:1.8, height:2.4
      },
      { 
        type:"Wall:Internal", 
        orientation:"West", 
        width:2.2, height:2.4,
        boundary:'bed2'
      },
      { 
        type:"Wall:Internal", 
        orientation:"North", 
        width:1.8, height:2.4,
        boundary:'bed1'
      },
      { 
        type:"Wall:Party", 
        orientation:"East", 
        width:2.2, height:2.4,
        boundary:'unheated'
      },
      { 
        type:"Floor:First", 
        width:1.8, height:2.2,
        boundary:'livingroom'
      },
      { 
        type:"Floor:Loft",
        width:1.8, height:2.2
      },
      {
        type:"Glazing:Double",
        subtractfrom:0,
        width:0.8, height:1.4
      }
    ],
    
    radiators: [{name:"Double Panel Convector 1200x500"}]
  },
  
 "landing":{
    temperature:18.0,
    width: 1.5, length: 4.4, height: 2.4,
    air_change_an_hour: 2.0,
    
    elements: [
      { 
        type:"Wall:Internal", 
        orientation:"South", 
        width:1.5, height:2.4,
        boundary:'study'
      },
      { 
        type:"Wall:Internal", 
        orientation:"West", 
        width:4.4, height:2.4,
        boundary:'bed1'
      },
      { 
        type:"Wall:Internal", 
        orientation:"North", 
        width:1.5, height:2.4,
        boundary:'bathroom'
      },
      { 
        type:"Wall:Party", 
        orientation:"East", 
        width:4.4, height:2.4,
        boundary:'unheated'
      },
      { 
        type:"Floor:First", 
        width:1.5, height:4.4,
        boundary:'hall'
      },
      { 
        type:"Floor:Loft",
        width:1.5, height:4.4
      }
    ]
  },
  
 "bathroom":{
    temperature:22.0,
    width: 2.4, length: 3.3, height: 2.4,
    air_change_an_hour: 3.0,
    
    elements: [
      { 
        type:"Wall:Internal", 
        orientation:"South", 
        width:2.4, height:2.4,
        boundary:'landing'
      },
      { 
        type:"Wall:External", 
        orientation:"West", 
        width:3.3, height:2.4
      },
      { 
        type:"Wall:External", 
        orientation:"North", 
        width:2.4, height:2.4
      },
      { 
        type:"Wall:Party",
        orientation:"East",
        width:3.3, height:2.4,
        boundary:'unheated'
      },
      { 
        type:"Floor:First", 
        width:2.4, height:3.3,
        boundary:'kitchen'
      },
      { 
        type:"Floor:Loft",
        width:2.4, height:3.3
      },
      {
        type:"Glazing:Double",
        subtractfrom:2,
        width:0.8, height:0.9
      }
    ],
    
    radiators: [
        //{name:"Dimplex SmartRad SRX180 Fan:2, 300L/h"},
        {name:"Double Panel Convector 800x600"}
    ]
  }
}
