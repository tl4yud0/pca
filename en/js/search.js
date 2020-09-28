var app = new Vue({
  el: '#search',
  data: {
    content: [
      {
        name: 'Home page',
        description: '',
        url: '/en/en/index.html',
        words: 'home page offices about us mission vision values transports shipments sinisters'
      },
      {
        name: 'About us',
        description: '',
        url: '/en/index.html#company',
        words: 'about us Quality Transcendence Passion Honesty Responsability Commitment Layalty'
      },
      {
        name: 'Services',
        description: '',
        url: '/en/index.html#services',
        words: 'services breadth professional adjusters Catastrophic events cargo maritime losses boilers technical violence equipment civil liability'
      },
      {
        name: 'Sinisters',
        description: '',
        url: '/en/index.html#sinister',
        words: 'sinisters implement strict requirements'
      },
      {
        name: 'Quality management',
        description: '',
        url: '/en/quality-management.html',
        words: 'quality management constant ISO 9001 PCA Group Type AJ-III Type AJ-V Transportation TOTAL QUALITY'
      },
      {
        name: "LLOYD's Agency",
        description: '',
        url: '/en/lloydsagency.html',
        words: "we are LLOYD's agency about us data map London international Agency Network provides worldwide presence"
      },
      {
        name: "Contact",
        description: '',
        url: '/en/contact-us.php',
        words: "contact messages offices mexico city guadalajara monterrey puebla veracruz hermosillo ciudad obregon tijuana culiacan leon mexicali"
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