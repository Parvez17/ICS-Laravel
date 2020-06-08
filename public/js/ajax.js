const cartAddAjax=(id)=>{
    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    console.log(CSRF_TOKEN);
  $.ajax({
      url:"/cart/add",
      type:"POST",
      data:{_token:CSRF_TOKEN,pid:id},
      dataType:'JSON',
      success:(res)=>{
          console.log(res);
          if(res[0].success){
              alert("chart added");
          }else{
              alert("Operation failed");
          }
      },error:(err)=>{
          console.error(err);
      }
  });
}