elixir = require 'laravel-elixir'
#/*
# |--------------------------------------------------------------------------
# | Elixir Asset Management
# |--------------------------------------------------------------------------
# |
# | Elixir provides a clean, fluent API for defining some basic Gulp tasks
# | for your Laravel application. By default, we are compiling the Less
# | file for our application, as well as publishing vendor resources.
# |
# */

#elixir (mix) ->
#  mix.less 'app.less'

elixir (mix) ->
  mix.sass '*.scss'