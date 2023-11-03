<template>
	<div>

<heady/>
<contactnav/>
<contactus/>
<footerr/>

  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import contactnav from"@/components/inc/contactnav.vue";
import contactus from"@/components/content/contactus.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady,contactnav,contactus,footerr
  }
};
</script>