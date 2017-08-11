jQuery(document).ready(function($) {
  
  
  //по клику кнопки записаться (Популярные программы) получаем все данные
  jQuery('.setMail').click(function(e){
    e.preventDefault();
     var dateForm  = $("form").serialize();
      
     console.log(dateForm);
    
  });
  
//получаем данные с формы ПОПУЛЯРНЫЕ ПРОГРАММЫ 
function getMailInfoPopularProgramm(){
  
   var mas = [];
   var data = {
			action: 'get_mail_info_popular_programm_callback', //на какой хук(функцию) отправлять запрос
			category: category  //пример, какую переменную передаем ту и получаем
		};
   
		//ajax  запрос
		jQuery.post( getMailAjax_object.url, data, function(response) {
 		  
		  if(!!response){
		    var obj = JSON.parse(response);

 			 for(var i = 0; i<obj.length; ++i ){
			  mas[i] = obj[i].name;
			  
			  }
		      }
		      
			
		}); 
      
  return mas;
}  

});