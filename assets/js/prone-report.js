  var markers = [];

  var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 9,
  center: new google.maps.LatLng(14.8302664,121.1126421),
  mapTypeId: google.maps.MapTypeId.ROADMAP
});
  var locations = [
[2,14.694993,121.031444,'Quirino Highway'], 
[3,14.645309,120.983548,'Rizal Avenue Extension'],
 [4,14.654633,120.957367,'C-4 Road'], 
 [5,14.668703,120.962598,'Gov. Pascual Ave'], 
 [6,14.679304,120.961569,'M.H Del Pilar St.'], 
 [7,14.66643,120.983477,'McArthur Highway'], 
 [8,14.636977,120.960692,'Honorio Lopez Blvd'], 
 [9,14.642623,120.953944,'Radial Road 10'], 
 [10,14.668703,120.962598,'Gov. Pascual Ave.'], 
 [11,14.661695,120.9437088,'M. Naval St'],
 [12,14.6983679,120.9750308,'Maysan Road'],
 [13,14.6928042,120.9667397,'McArthur Highway'], 
 [14,14.5505859,121.027421,'EDSA'], 
 [15,14.5115844,121.0300889,'Pres. Sergio Osme\u00f1a Highway'], 
 [16,14.5115844,121.0300889,'Buendia Ave.'], 
 [17,14.4403658,120.9981088,'Alabang-Zapote Road'],
 [18,14.4243497,121.0299451,'Real St.'], 
 [19,14.4282532,121.0004168,'Marcos Alvarez Ave.'], 
 [20,14.4398552,121.0430144,'West Service Road'], 
 [21,14.4403606,120.9981088,'National Highway: Alabang-Zapote Road'], 
 [22,14.4798234,121.0428424,'West Service Road'], 
 [23,14.5261728,120.9914434,'Roxas Blvd.'],
 [24,14.4994775,120.9941689,'Ninoy Aquino Ave.'], 
 [25,14.4668317,121.0132325,'Dr. A. Santos Ave.'], 
 [26,14.5374904,120.9965166,'EDSA'],
 [27,14.5535642,120.9911321,'Buendia Ext.'],
 [28,14.5490961,120.9894841,'Roxas Blvd.'], 
 [29,14.5233127,121.0523728,'Carlos P. Garcia Ave. (C-5)'], 
 [30,14.4989545,121.061065,'M. L. Quezon St.'], 
 [31,14.51383,121.0315691,'East Service Road'], 
 [32,14.5451858,121.0663202,'M. Almeda St.'], 
 [33,14.5458139,121.063843,'P. Herrera St.'], 
 [34,14.6230117,121.0841018,'Marcos Highway'], 
 [35,14.6350505,121.0991299,'Sumulong Highway'], 
 [36,14.571116,121.0444166,'EDSA'], 
 [37,14.5886329,121.0410704,'Shaw Blvd'], 
 [38,14.590526,121.0825219,'Ortigas Ave.'], 
 [39,14.5774858,121.0712981,'E. Rodriguez Jr. Ave.'], 
 [40,14.6188835,121.0904116,'Marcos Highway'], 
 [41,14.5661387,121.0712666,'Julia Vargas'], 
 [42,14.6034922,121.0424669,'Ortigas Ave.'],
 [43,14.6046687,121.0555774,'EDSA'], 
 [44,14.6076404,121.0370945,'Santolan Road'], 
 [45,14.5998042,121.0345793,'P. Guevarra St.'], 
 [46,14.6082566,121.025801,'N. Domingo St.'],
 [47,14.5715058,120.9977516,'Pres. Sergio Osme\u00f1a Highway'], 
 [48,14.6121973,120.9582629,'Radial Road 10'], 
 [49,14.5514161,120.987522,'Roxas Blvd.'],
 [50,14.7052654,121.0715684,'Commonwealth Ave.'],
 [51,14.668703,120.962598,'Gov. Pascual Ave'],
 [52,14.679304,120.961569,'M.H Del Pilar St.'],
 [53,14.66643,120.983477,'McArthur Highway'], 
 [54,14.636977,120.960692,'Honorio Lopez Blvd'],
 [55,14.642623,120.953944,'Radial Road 10'], 
 [56,14.668703,120.962598,'Gov. Pascual Ave.'],
 [57,14.661695,120.9437088,'M. Naval St'], 
 [58,14.6983679,120.9750308,'Maysan Road'], 
 [59,14.6928042,120.9667397,'McArthur Highway'],
 [60,14.5505859,121.027421,'EDSA'],
 [61,14.5115844,121.0300889,'Pres. Sergio Osme\u00f1a Highway'], 
 [62,14.5115844,121.0300889,'Buendia Ave.'], 
 [63,14.4403658,120.9981088,'Alabang-Zapote Road'], 
 [64,14.4243497,121.0299451,'Real St.'], 
 [65,14.4282532,121.0004168,'Marcos Alvarez Ave.'], 
 [66,14.4398552,121.0430144,'West Service Road'], 
 [67,14.4403606,120.9981088,'National Highway: Alabang-Zapote Road'], 
 [68,14.4798234,121.0428424,'West Service Road'], 
 [69,14.5261728,120.9914434,'Roxas Blvd.'],
 [70,14.4994775,120.9941689,'Ninoy Aquino Ave.'],
 [71,14.4668317,121.0132325,'Dr. A. Santos Ave.'],
 [72,14.5374904,120.9965166,'EDSA'], 
 [73,14.5535642,120.9911321,'Buendia Ext.'], 
 [74,14.5490961,120.9894841,'Roxas Blvd.'], 
 [75,14.5233127,121.0523728,'Carlos P. Garcia Ave. (C-5)'],
 [76,14.4989545,121.061065,'M. L. Quezon St.'], 
 [77,14.51383,121.0315691,'East Service Road'], 
 [78,14.5451858,121.0663202,'M. Almeda St.'], 
 [79,14.5458139,121.063843,'P. Herrera St.'],
 [80,14.6230117,121.0841018,'Marcos Highway'],
 [81,14.6350505,121.0991299,'Sumulong Highway'], 
 [82,14.571116,121.0444166,'EDSA'], 
 [83,14.5886329,121.0410704,'Shaw Blvd'],
 [84,14.590526,121.0825219,'Ortigas Ave.'],
 [85,14.5774858,121.0712981,'E. Rodriguez Jr. Ave.'], 
 [86,14.6188835,121.0904116,'Marcos Highway'], 
 [87,14.5661387,121.0712666,'Julia Vargas'],
 [88,14.6034922,121.0424669,'Ortigas Ave.'], 
 [89,14.6046687,121.0555774,'EDSA'], 
 [90,14.6076404,121.0370945,'Santolan Road'], 
 [91,14.5998042,121.0345793,'P. Guevarra St.'],
 [92,14.6082566,121.025801,'N. Domingo St.'], 
 [93,14.5715058,120.9977516,'Pres. Sergio Osme\u00f1a Highway'], 
 [94,14.6121973,120.9582629,'Radial Road 10'], 
 [95,14.5514161,120.987522,'Roxas Blvd.'], 
 [96,14.7052654,121.0715684,'Commonwealth Ave.'], 
 [97,14.6342974,121.0417414,'EDSA'], 
 [98,14.6938539,121.0284684,'Quirino Highway']
  ];
  var infowindow = new google.maps.InfoWindow();
  var marker, i,earthquake;


  for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
       icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png',
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      map: map
    });
    google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
        infowindow.setContent("<b>Latitude: "+locations[i][1]+"<br>Longitude: "+locations[i][2]+"<br>Location: "+locations[i][3]+"</b>");
        infowindow.open(map, marker);
      }
    })(marker, i));
      markers.push(marker);
  }
