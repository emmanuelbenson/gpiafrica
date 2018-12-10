$("#industry").select2();

$("#country").select2();

//
$("#usrChoice").val(localStorage.getItem("usrChoice"));

// Load all countries
$.ajax({
    url: "/api/countries",
    method: "get"
}).
done(function(res){
    var countries = res.countries;
    for(let i in countries){
        var country = countries[i]
        var option = "<option value='"+country.id+"'>"+country.name+"</option>"
        $('#country').append(option)
    }
}).
fail(function(err){
    console.log(err)
});

// Load all industries
$.ajax({
    url: "/api/industries",
    method: "get"
}).
done(function(res){
    var industries = res.industries;
    for(let i in industries){
        var industry = industries[i]
        var option = "<option value='"+industry.id+"'>"+industry.title+"</option>"
        $('#industry').append(option)
    }
}).
fail(function(err){
    console.log(err)
});