
const init=()=>{
  navController();
  //呼び出し
  slideChange($('#slidelist'));
}
  



function slideChange($target){
  //li要素を取り出す(jQuery配列)
  const $items=$target.find('li');
  let index=0;//表示する画像のindex

  function open(){
    $items.eq(index).fadeIn(1200,'easeInQuad',function(){setTimeout(change,2000)})
  }
  function close(){
    $items.eq(index).fadeOut(1200,'easeOutQuad');
  }
  function change(){
    close();
    //indexを画像枚数(0~3)で循環させる常套手段
    index=++index%$items.length;
    open();
  }
  open();

}
function navController(){
  $(".has-child>a").off('click');//has-childクラスがついたaタグのonイベントをoff(無効)にし
  $(".has-child>a").removeClass('active');//activeクラスを削除
  $('.has-child').children('ul').css("display","");//スライドトグルで動作したdisplayも無効化にする 
}
