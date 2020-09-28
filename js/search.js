var app = new Vue({
  el: '#search',
  data: {
    content: [
      {
        name: 'Página de Inicio',
        description: '',
        url: '/index.html',
        words: 'página de inicio red de oficinas quienes somos misión visión valores transportes marítimo carga siniestros'
      },
      {
        name: 'Nosotros',
        description: '',
        url: '/index.html#nosotros',
        words: 'nosotros misión visión valores Calidad Trascendencia Pasión Honradez Responsabilidad Compromiso Lealtad'
      },
      {
        name: 'Servicios',
        description: '',
        url: '/index.html#servicios',
        words: 'servicios Industrias especialización perdidas técnicos maquinaria robo violencia dinero responsabilidad civil'
      },
      {
        name: 'Siniestros',
        description: '',
        url: '/index.html#siniestros',
        words: 'siniestros Implementamos estrictos estándares servicio tiempos respuesta cumplir  requerimientos exigentes.'
      },
      {
        name: 'Gestión de Calidad',
        description: '',
        url: '/gestiondecalidad.html',
        words: 'gestión de calidad Grupo PCA Documentos ISO 9001:2015 calidad total Tipo AJ-III Transportes Carga Tipo AJ-V Otros Riesgos de Daños '
      },
      {
        name: "LLOYD's Agency",
        description: '',
        url: '/lloydsagency.html',
        words: "somos LLOYD's agency conócenos datos mapa Red Mundial Agencias"
      },
      {
        name: "Contacto",
        description: '',
        url: '/contacto.php',
        words: "contacto mensaje oficinas ciudad de méxico guadalajara monterrey puebla veracruz hermosillo ciudad obregón tijuana culiacán león mexicali"
      },
    ],
    results: null,
    keywords: null
  },
  mounted(){

  },
  methods: {
    searchUrl(text){
      if(text){
        this.results = this.content
                   .filter( item  => item.words.includes(text.toLowerCase()) );
      }
    },
    goToLink(url){
      window.location.href = url;
    }
  }
});