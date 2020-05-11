




@if($rate>0)
@for($i=1;$i<6;$i++)
   @if($rate>=$i)
   <span class="fa fa-star checked" style="color:gold"></span> 
   @else
   <span class="fa fa-star "></span>
   @endif
@endfor
@endif
