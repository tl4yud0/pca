var app = new Vue({
  el: '#search',
  data: {
    content: [
      {
        name: 'Página de Inicio',
        description: '',
        url: '/pca/index.html',
        words: 'página de inicio red de oficinas quienes somos misión visión valores transportes marítimo carga siniestros'
      },
      {
        name: 'Nosotros',
        description: '',
        url: '/pca/index.html#nosotros',
        words: 'nosotros '
      },
      {
        name: 'Servicios',
        description: '',
        url: '/pca/index.html#servicios',
        words: 'servicios'
      },
      {
        name: 'Siniestros',
        description: '',
        url: '/pca/index.html#siniestros',
        words: 'siniestros'
      },
      {
        name: 'Gestión de Calidad',
        description: '',
        url: '/pca/gestiondecalidad.html',
        words: 'gestión de calidad'
      },
      {
        name: "LLOYD's Agency",
        description: '',
        url: '/pca/lloydsagency.html',
        words: "somos LLOYD's agency conócenos datos mapa"
      },
      {
        name: "Contacto",
        description: '',
        url: '/pca/contacto.php',
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