

new Vue({
    el: '#app',
    data: {
      map: null,
      tileLayer: null,
      layers: [
        {
          id: 0,
          name: 'Toilettes',
          active: false,
          features: [
            {
              id: 0,
              name: 'Zone Toilette 1',
              type: 'marker',
              coords: [48.85610, 2.29655],
            },
            {
              id: 1,
              name: 'Zone Toilettes 2',
              type: 'marker',
              coords: [48.85478, 2.30060],
            },
            {
              id: 2,
              name: 'Zone Toilettes 3',
              type: 'marker',
              coords: [48.85514, 2.30147],
            },
            {
              id: 3,
              name: 'Zone Toilettes 4',
              type: 'marker',
              coords: [48.85719, 2.29957],
            },
                
          ],
        },
          {
            id: 2,
            name: 'Points Wifi',
            active: false,
            features: [
              {
                id: 0,
                name: 'Point Wifi 1',
                type: 'marker',
                coords: [48.85682, 2.29678],
              },
              {
                id: 1,
                name: 'Point Wifi 2',
                type: 'marker',
                coords: [48.85672, 2.29492],
              },
              {
                id: 2,
                name: 'Point Wifi 3',
                type: 'marker',
                coords: [48.8554, 2.29872],
              },
              {
                id: 3,
                name: 'Point Wifi 4',
                type: 'marker',
                coords: [48.85483, 2.29985],
              },
            ],
        },
        {
          id: 3,
          name: 'Merchandising',
          active: false,
          features: [
            {
              id: 0,
              name: 'Merchandising 1',
              type: 'marker',
              coords: [48.85663, 2.29841],
            },
            {
              id: 1,
              name: 'Merchandising 2',
              type: 'marker',
              coords: [48.85642, 2.29871],
            },
          ],
      },
      {
        id: 4,
        name: 'Restauration',
        active: false,
        features: [
          {
            id: 0,
            name: 'Zone restauration 1',
            type: 'marker',
            coords: [48.85630, 2.29763],
          },
          {
            id: 1,
            name: 'Zone restauration 2',
            type: 'marker',
            coords: [48.85592, 2.29822],
          },
        ],
    },
    {
      id: 5,
      name: 'Buvettes/Bars',
      active: false,
      features: [
        {
          id: 0,
          name: 'Zone buvettes 1',
          type: 'marker',
          coords: [48.85636, 2.29777],
        },
        {
          id: 1,
          name: 'Zone buvettes 2',
          type: 'marker',
          coords: [48.85598, 2.29830],
        },
      ],
  },
  {
    id: 6,
    name: 'Entrées',
    active: false,
    features: [
      {
        id: 0,
        name: 'Entrée principale',
        type: 'marker',
        coords: [48.85760, 2.29983],
      },
      {
        id: 1,
        name: 'Entrée VIP',
        type: 'marker',
        coords: [48.85746, 2.30020],
      },
    ],
},
{
  id: 7,
  name: 'Sorties',
  active: false,
  features: [
    {
      id: 0,
      name: 'Sortie 1',
      type: 'marker',
      coords: [48.85467, 2.29556],
    },
    {
      id: 1,
      name: 'Sortie 2',
      type: 'marker',
      coords: [48.85449, 2.29578],
    },
  ],
},
{
  id: 8,
  name: 'Navettes',
  active: false,
  features: [
    {
      id: 0,
      name: 'Navette 1',
      type: 'marker',
      coords: [48.85776, 2.30047],
    },
    {
      id: 1,
      name: 'Navette 2',
      type: 'marker',
      coords: [48.85486, 2.29550],
    },
  ],
},
{
  id: 9,
  name: 'Points Info',
  active: false,
  features: [
    {
      id: 0,
      name: 'Point Info 1',
      type: 'marker',
      coords: [48.85717, 2.29915],
    },
    {
      id: 1,
      name: 'Point Info 2',
      type: 'marker',
      coords: [48.85565, 2.29692],
    },
  ],
},{
  id: 10,
  name: 'Espace secours',
  active: false,
  features: [
    {
      id: 0,
      name: 'Espace secours 1',
      type: 'marker',
      coords: [48.85817, 2.29660],
    },
    {
      id: 1,
      name: 'Espace secours 2',
      type: 'marker',
      coords: [48.85678, 2.29534],
    },
    {
      id: 2,
      name: 'Espace secours 3',
      type: 'marker',
      coords: [48.85625, 2.29971],
    },
    {
      id: 3,
      name: 'Espace secours 4',
      type: 'marker',
      coords: [48.85513, 2.29941],
    },
  ],
},
{
  id: 11,
  name: 'Espace VIP',
  active: false,
  features: [
    {
      id: 0,
      name: 'Espace VIP',
      type: 'marker',
      coords: [48.85744, 2.29761],
    },
  ],
},
{
  id: 12,
  name: 'Billeteries',
  active: false,
  features: [
    {
      id: 0,
      name: 'Billeterie 1',
      type: 'marker',
      coords: [48.85747, 2.29966],
    },
    {
      id: 1,
      name: 'Billeterie 2',
      type: 'marker',
      coords: [48.85733, 2.29997],
    },
  ],
},
        {
          id: 1,
          name: 'Scènes',
          active: false,
          features: [
            {
              id: 0,
              name: 'Scene Electro',
              type: 'polygon',
              coords: [
                [48.85736, 2.29472],
                [48.85802, 2.29567],
                [48.85786, 2.29567],
                [48.85720, 2.29472],
                
              ],
            },{
              id: 1,
              name: 'Scene rap',
              type: 'polygon',
              coords: [
                [48.85734, 2.29823],
                [48.85701, 2.29875],
                [48.85684, 2.29875],
                [48.85719, 2.29823],
              ],
            },{
              id: 2,
              name: 'Scene rock',
              type: 'polygon',
              coords: [
                [48.85584, 2.29602],
                [48.85611, 2.29648],
                [48.85634, 2.29648],
                [48.85629, 2.29602],
              ],
            },{
              id: 3,
              name: 'Scene variétés françaises',
              type: 'polygon',
              coords: [
                [48.85594, 2.30057],
                [48.85561, 2.30109],
                [48.85527, 2.30109],
                [48.85552, 2.30057],
              ],
            },{
              id: 4,
              name: 'Scene pop',
              type: 'polygon',
              coords: [
                [48.85412, 2.29895],
                [48.85446, 2.29817],
                [48.85404, 2.29883],
                [48.85456, 2.29831],
                
              ],
            },
          ],
        }
      ],
    },
    mounted() {
      this.initMap();
      this.initLayers();
    },
    methods: {
      layerChanged(layerId, active) {
        const layer = this.layers.find(layer => layer.id === layerId);
        
        layer.features.forEach((feature) => {
          if (active) {
            feature.leafletObject.addTo(this.map);
          } else {
            feature.leafletObject.removeFrom(this.map);
          }
        });
      },
      initLayers() {
        this.layers.forEach((layer) => {
          const markerFeatures = layer.features.filter(feature => feature.type === 'marker');
          const polygonFeatures = layer.features.filter(feature => feature.type === 'polygon');
          
          markerFeatures.forEach((feature) => {
            feature.leafletObject = L.marker(feature.coords)
              .bindPopup(feature.name);
          });
          
          polygonFeatures.forEach((feature) => {
            feature.leafletObject = L.polygon(feature.coords)
              .bindPopup(feature.name);
          });
        });
      },
      initMap() {
        this.map = L.map('map').setView([48.85743, 2.29788], 17);
        this.tileLayer = L.tileLayer(
          'https://cartodb-basemaps-{s}.global.ssl.fastly.net/rastertiles/voyager/{z}/{x}/{y}.png',
          {
            maxZoom: 18,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, &copy; <a href="https://carto.com/attribution">CARTO</a>',
          }
        );
          
        this.tileLayer.addTo(this.map);
      },
    },
  });
  
  