<style>
/* Import your CSS files here */
@import url('https://fonts.googleapis.com');
@import url('https://fonts.gstatic.com');
@import url('https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap');

@import '@/assets/assets/css/sb-admin-2.min.css';
@import '@/assets/assets/css/sb-admin-2.css';
</style>

<script>
  export default {
    name: "Style",
  mounted() {
      this.loadScripts();
  },
  methods: {
      loadScripts() {
        const scriptUrls = [
        '/public/js/sb-admin-2.min.js',
        '/public/js/sb-admin-2.js',
        ];

        const head = document.getElementsByTagName('head')[0];

        scriptUrls.forEach((scriptUrl) => {
          const script = document.createElement('script');
          script.src = scriptUrl;
          script.async = true;
          head.appendChild(script);
        });
      },
  
    },
  };
</script>
