<template>
	<div>

<heady/>
<aboutbanner/>
<about/>
<footerr/>

  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import aboutbanner from"@/components/inc/aboutbanner.vue";
import about from"@/components/content/about.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady,aboutbanner,about,footerr
  }
};
</script>