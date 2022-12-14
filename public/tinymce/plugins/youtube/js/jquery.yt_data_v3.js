var YTDataV3= {
    key:'',
    order:'relevance',
    next_page_token:'',
    init:function(param) {
        this.key=param.key;
        this.order=param.order;
    }
    ,
    search:function(param, response) {
        var q=encodeURIComponent(param.q);
        var url='https://www.googleapis.com/youtube/v3/search?q='+q+'&key='+this.key+'&maxResults='+param['max-results']+'&order='+this.order+'&type=video&safeSearch=none&videoEmbeddable=true&part=snippet';
        if(param.next_page==true) {
            url+='&pageToken='+this.next_page_token;
        }
        $.getJSON(url, function(yt) {
            var vids=[];
            for(var i=0; i<yt.items.length; i++) {}
            YTDataV3.next_page_token=yt.nextPageToken;
            var data= {
                itemsPerPage: yt.pageInfo.resultsPerPage, searchURL: url, startIndex: 1, totalResults: yt.pageInfo.totalResults, version: "1.0", videos: yt.items
            };
            response(data);
        });
    }
};