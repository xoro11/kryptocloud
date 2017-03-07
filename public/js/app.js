var postId=0;
var postBodyElement=null;

$('.row').find('.interaction').find('.like').on('click',function(event){

    event.preventDefault();
    postId=event.target.parentNode.parentNode.dataset['postid'];
    var isLike=event.target.previousElementSibling==null;

    console.log(isLike);
    $.ajax({
        method:'POST',
        url:urlLike,
        data:{isLike:isLike,postId:postId,_token:token}
    })
        .done(function () {
            //change page
        });

});