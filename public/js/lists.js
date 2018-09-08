
var selectCountry = document.getElementById("country_list");
var optionsCountry = ["United States","United Kingdom","Ireland","Australia","Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

// Optional: Clear all existing options first:
selectCountry.innerHTML = "";
// Populate list with options:
for(var i = 0; i < optionsCountry.length; i++) {
    var optCountry = optionsCountry[i];
    selectCountry.innerHTML += "<option value=\"" + optCountry + "\">" + optCountry + "</option>";
}


var selectLevel = document.getElementById("level_list");
var optionsLevel = ["Associate","Analyst","Advisor","Consultant","Controller","Manager","Director","VP","CFO","CEO"];

// Optional: Clear all existing options first:
selectLevel.innerHTML = "null";
// Populate list with options:
for(var i = 0; i < optionsLevel.length; i++) {
    var optLevel = optionsLevel[i];
    selectLevel.innerHTML += "<option value=\"" + optLevel + "\">" + optLevel + "</option>";
}

var selectIndustry = document.getElementById("industry_list");
var optionsIndustry = ["Accounting", "Aerospace", "Agriculture/Farming","Airlines", "Apparel","Architecture","Automotive","Aviation","Banking","Biotechnology","Broadcast Media","Building Materials","Business Supplies","Capital Markets/Private Equity","Chemicals","Civil Engineering","Commercial Real Estate","Computer Hardware","Computer Software","Computer/Network Security","Construction","Consumer Electronics","Consumer Goods","Consumer Services","Cosmetics","Dairy","Defense/Space","Design","Education","Electronic Manufacturing","Engineering","Entertainment Production","Environmental Services","Events Services","Facilities Services","Financial Services","Fishery","Food Production","Food/Beverages","Gambling/Casinos","Glass/Ceramics/Concrete","Government Administration","Health/Fitness","Higher Education","Hospital/Health Care","Hospitality","Human Resources/HR","Import/Export","Industrial Automation","Information Services","Information Technology/IT","Insurance","International Trade","Investment Banking","Legal Services","Leisure/Travel","Logistics/Procurement","Luxury Goods","Machinery","Management Consulting","Maritime","Marketing/Sales","Media Production","Medical Equipment","Military Industry","Mining/Metals","Museums/Institutions","Music","Newspapers/Journalism","Non-Profit/Volunteering","Oil/Energy/Solar/Greentech","Other Industry","Outsourcing/Offshoring","Package/Freight","Paper/Forestry","Pharmaceuticals","Plastics","Printing","Public Relations/PR","Publishing","Real Estate/Mortgage","Recreational Services","Religious Institutions","Renewables/Environment","Restaurants","Retail Industry","Semiconductors","Shipbuilding","Sporting Goods","Staffing/Recruiting","Supermarkets/Wholesale","Telecommunications","Textiles","Tobacco","Training & Development","Transportation","Utilities","Venture Capital","Wine/Spirits"]

selectIndustry.innerHTML = "";
// Populate list with options:
for(var i = 0; i < optionsIndustry.length; i++) {
    var optIndustry = optionsIndustry[i];
    selectIndustry.innerHTML += "<option value=\"" + optIndustry + "\">" + optIndustry + "</option>";
}


var selectSize = document.getElementById("size_list");
var optionsSize = ["1M to 10M","10M to 50M","50M to 100M","100M to 250M","250M to 1000M","1000M to 5000M","Greater than 5000M"];

// Optional: Clear all existing options first:
selectSize.innerHTML = "";
// Populate list with options:
for(var i = 0; i < optionsSize.length; i++) {
    var optSize = optionsSize[i];
    selectSize.innerHTML += "<option value=\"" + optSize + "\">" + optSize + "</option>";
}
