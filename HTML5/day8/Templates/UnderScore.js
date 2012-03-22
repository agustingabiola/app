/* 
 * UnderScore template
 */
var templateUnderScore = "<div>\
                            <br></b><br></b>\
                            <p>Template Under Score</p>\
                            <br></b>\
                            <% var name = json_view.name.first+' '+json_view.name.last; %>\
                            <p>Name:  <%= name %></p>\
                            <p>Title:  <%= json_view.title %></p>\
                            <p>Location:  <%= json_view.location %></p>\
                            <p>Area of work:  <%= json_view.area_of_work %></p>\
                            <p>Actual job:  <%= json_view.actual_job %></p>\
                            <p>Previous jobs:  <%= json_view.previous_jobs %></p>\
                            <p>Education:  <%= json_view.education %></p>\
                            <p>Link to private Curriculum Vitae (CV):  <%= json_view.cv_link %></p>\
                        </div>";

