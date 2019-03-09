$(function(){
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  // $.ajax({
  //     type:"GET",
  //     url:"/web/api/homeHotels",
  //     dataType:"json",
  //     success:function(r){
  //       if(r.itemListElement.length > 0){
  //         let html;
  //         for(let i = 0;i<r.itemListElement.length;i++){
  //           let row = r.itemListElement[i].item;
  //           if(row){
  //             let price = row.priceRange.replace('TRY', '');
  //             let image = row.image.replace('https://tatilsepeti.cubecdn.net/', '');
  //             html+= '<article>'+
  //             '						<header>'+
  //             '							<figure><img src="/image-file/'+image+'" alt="Placeholder" width="300" height="160"><div class="fit-a"></div></figure>'+
  //             '							<h3><a href="#">'+row.name+'</a></h3>'+
  //             '							<p><span class="rating-a a">10/'+i+'</span> ( '+row.aggregateRating[0].reviewCount+' Puan )</p>'+
  //             '							<p class="scheme-i">'+price+'<span>₺</span></p>'+
  //             '						</header>'+
  //             '						<p style="height:50px;"><a class="link">Detaylar</a></p>'+
  //             '						<footer>'+
  //             '							<p>'+row.address[0].streetAddress+'</p>'+
  //             '						</footer>'+
  //             '					</article>';
  //           }
  //         }
  //         $('.news-d').html(html.replace('undefined', ''));
  //       }
  //     }
  //
  // });
});
