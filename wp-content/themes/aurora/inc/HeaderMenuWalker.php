<?php
class HeaderMenuWalker extends Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        if ($depth == 0) {
            $output .= '<ul class="dropdown-menu multi-column columns-3"><div class="row">';
        }

    }
    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        if ($depth == 0) {
            $output .= '</div></ul>';
        }
    }
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        if ($depth == 0) {
            $output .= '<li ';
            if ($args->walker->has_children) {
                $output .= 'class = "dropdown" ';
            }
            $output .= '><a href="' . $item->url . '" ';
            if ($args->walker->has_children) {
                $output .= 'class="dropdown-toggle" data-toggle="dropdown"';
            }
            $output .= '>' . $item->title;
            if ($args->walker->has_children) {
                $output .= ' <b class="caret"></b>';
            }
            $output .= '</a>';
        } elseif ($depth == 1) {
            $output .= '<div class="col-sm-4"><ul class="multi-column-dropdown"><h6>'.strtoupper($item->title).'</h6>';
        } elseif ($depth == 2){
            $output .= '<li><a href="'.$item->url.'">'.$item->title.'</a></li>';
        }
    }
    public function end_el(&$output, $item, $depth = 0, $args = null)
    {
        if($depth == 0){
            $output .= '</li>';
        }
        elseif($depth == 1){
            $output .= '</ul></div>';
        }
    }

}
