<script type="text/javascript">

// a123(param){}
function a{{$item->id}}(param) {
  console.log("xxxx");
  ///
  var xhr = new XMLHttpRequest();
  if(param=='like') {
   xhr.open('POST', "{{ route('user.like', ['id' => $item->id]) }}", true);
  } else {
   xhr.open('DELETE', "{{ route('user.unlike', ['id' => $item->id]) }}", true);
  }
  
  xhr.onreadystatechange = function(){
    // 本番用
    if (xhr.readyState === 4 && xhr.status === 200){
      if(xhr.responseText == "ok") {
         console.log("ok");
         if(param=='like') {
           $("#btn_{{$item->id}}_b").hide();
           $("#btn_{{$item->id}}_a").show();
         } else{
           $("#btn_{{$item->id}}_b").show();
           $("#btn_{{$item->id}}_a").hide();
         }
      } else {
        // 
        console.log("ng");
      }
    }
  };
  xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');  // laravelvalidation対策
  xhr.send(null);
}
</script>

<!--見た目の条件分岐-->
@if (Auth::id() == $user->id)
<?php
    if (Auth::user()->is_liking($item->id)) {
     $visibleA = "display:inline-block";
     $visibleB = "display:none";
   } else {
     $visibleA = "display:none";
     $visibleB = "display:inline-block";
   }    

?>
<!--二つのボタン-->
<div class="button_wrapper">
     <button id="btn_{{$item->id}}_a" class="favoritebutton2" onclick="a{{$item->id}}('unlike')" style='{{$visibleA}}'>いらない</button>
</div>
<div class="button_wrapper">
     <button id="btn_{{$item->id}}_b" class="favoritebutton" onclick="a{{$item->id}}('like')" style='{{$visibleB}}'>お気に入り</button>
</div>
@endif