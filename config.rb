# Require any additional compass plugins here.
require "susy"

# This moves the compiles style.css into the theme folder root but keeps the other css files in the css directory
#Credit CSS-Tricks - http://css-tricks.com/compass-compiling-and-wordpress-themes/
require 'fileutils'
on_stylesheet_saved do |file|
 if File.exists?(file) && File.basename(file) == "style.css"
   FileUtils.mv(file, File.dirname(file) + "/../../" + File.basename(file))
 end
end