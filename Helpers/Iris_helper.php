<?php

if (!function_exists("generate_iris_permissions")) {

    /**
     * Permite registrar los permisos asociados al modulo, tecnicamente su
     * ejecucion regenera los permisos asignables definidos por el modulo DISA
     */
    function generate_iris_permissions(): void
    {
        $permissions = array(
            "iris-access",
            //[patients]----------------------------------------------------------------------------------------
            "iris-patients-access",
            "iris-patients-view",
            "iris-patients-view-all",
            "iris-patients-create",
            "iris-patients-edit",
            "iris-patients-edit-all",
            "iris-patients-delete",
            "iris-patients-delete-all",
            //[Episode]----------------------------------------------------------------------------------------
            "iris-episodes-access",
            "iris-episodes-view",
            "iris-episodes-view-all",
            "iris-episodes-create",
            "iris-episodes-edit",
            "iris-episodes-edit-all",
            "iris-episodes-delete",
            "iris-episodes-delete-all",
            //[studies]----------------------------------------------------------------------------------------
            "iris-studies-access",
            "iris-studies-view",
            "iris-studies-view-all",
            "iris-studies-create",
            "iris-studies-edit",
            "iris-studies-edit-all",
            "iris-studies-delete",
            "iris-studies-delete-all",
            //[Image]----------------------------------------------------------------------------------------
            "iris-images-access",
            "iris-images-view",
            "iris-images-view-all",
            "iris-images-create",
            "iris-images-edit",
            "iris-images-edit-all",
            "iris-images-delete",
            "iris-images-delete-all",
        );
        generate_permissions($permissions, "iris");
    }

}

if (!function_exists("get_iris_sidebar")) {
    function get_iris_sidebar($active_url = false): string
    {
        $bootstrap = service("bootstrap");
        $lpk = safe_strtolower(pk());
        $options = array(
            "home" => array("text" => lang("App.Home"), "href" => "/iris/", "svg" => "home.svg"),
            "episodes" => array("text" => "Episodios Clínicos", "href" => "/iris/episodes/list/" . lpk(), "icon" => ICON_TOOLS, "permission" => "iris-access"),
            "patients" => array("text" => "Pacientes", "href" => "/iris/patients/list/" . lpk(), "icon" => ICON_TOOLS, "permission" => "iris-access"),
            "studies" => array("text" => "Estudios Diagnósticos", "href" => "/iris/studies/list/" . lpk(), "icon" => ICON_TOOLS, "permission" => "iris-access"),
            "settings" => array("text" => lang("App.Settings"), "href" => "/iris/settings/home/" . lpk(), "icon" => ICON_TOOLS, "permission" => "iris-access"),
        );
        $o = get_application_custom_sidebar($options, $active_url);
        $return = $bootstrap->get_NavPills($o, $active_url);
        return ($return);
    }
}

?>
