function ajax(obj){
   var type=obj.type||"get";
   var url=obj.url;
   var data=obj.data||"";
   var asynch=obj.asynch==undefined?true:obj.asynch;
   var dataType=obj.dataType||"text";
   var callback=obj.success;
   // {name:"zhangsan",age:17}   "name=zhangsan&age=17"
   if(typeof data=="object"){
     var str="";
     for(var i in data){
        str+=i+"="+data[i]+"&";
     }
     data=str.slice(0,-1);
   }
    var xhr=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");
    // "string" "number" "undefiend" "boolean" "object" "function"
    // Array.isArray(arr)
    if(type=="get"){
       if(data==""){
           xhr.open(type,url,asynch)
       }else{
           xhr.open(type,url+"?"+data,asynch)
       }
       xhr.send()
    }else{
       xhr.open(type,url,asynch);
       xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
       xhr.send(data);
    }
    xhr.responseType=dataType;
    xhr.onload=function(){
       callback(xhr.response);
    }   
}



