var pages = [
    {"page":"index","title":"Inicio","link":"/Yani"},
    {"page":"about","title":"Sobre mí","link":"/Yani/about"}, 
    {"page":"services","title":"Servicios","link":"/Yani/services"},
    {"page":"blog","title":"Blog","link":"/Yani/blog"},
    {"page":"contact","title":"Contacto","link":"/Yani/contact"}
];

function CreateElement(parent,element,text,params){
    if(params === undefined || params === null){
        params = {};
    }
    var element = $('<'+element+'>')
                    .attr(params)
                    .text(text)
                    .appendTo(parent);
    return element;
}

function addClickEventToLink(li, page){
    $(li).click(function(){
        window.location.href = page.link;
    });
}

(function(){
    var header=$('<div>').attr("class","header center").prependTo('.container');
    var nav = CreateElement(header,"div",undefined,{"class": "nav center"});
    var ul = CreateElement(nav,"ul",undefined,{"class": "center"});
    pages.forEach(function(page){
        var li;
        if($('.container').attr("class").includes(page.page)){
            li = CreateElement(ul,"li",page.title,{"class": page.page + ", selected"});
        }else{
            li = CreateElement(ul,"li",page.title,{"class": page.page});
            addClickEventToLink(li,page);
        }
    });

    $('<li class="round"><a target="_blank" href="https://wa.me/34685544997">Pide cita</a></li>').appendTo(ul);
    
})();
