<template>
	<div>

<heady/>
<navi/>
<contactus/>
<footerr/>

  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import navi from"@/components/inc/navigation.vue";
import contactus from"@/components/content/contactus.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady,navi,contactus,footerr
  }
};
</script>