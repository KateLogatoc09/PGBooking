<template>
	<div>

<heady/>
<navi/>
<about/>
<footerr/>

  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import navi from"@/components/inc/navigation.vue";
import about from"@/components/content/about.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady,navi,about,footerr
  }
};
</script>