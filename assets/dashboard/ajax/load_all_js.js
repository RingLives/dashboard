function include(file)
{
  var script  = document.createElement('script');
  script.src  = file;
  script.type = 'text/javascript';
  script.defer = true;

  document.getElementsByTagName('head').item(0).appendChild(script);
}

/* include any js files here */

include('/project/ring/dashboard/assets/dashboard/ajax/menu/parent.js');
include('/project/ring/dashboard/assets/dashboard/ajax/menu/child.js');
// include('/project/ring/dashboard/assets/dashboard/ajax/confirmation/confirmSubmit.js');
