<?php

/* Villanos/villanos.html.twig */
class __TwigTemplate_616c58e3cd04037ca83d5c857c1b36ef0ef162cd38e73f553600edc43bacfe8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Villanos/villanos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Villanos/villanos.html.twig"));

        // line 1
        echo "



<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->


<table class=\"table table-dark\">
  <thead>
    <tr>
      <th scope=\"col\">Villano</th>
      <th scope=\"col\">Superpoder</th>

      <th scope=\"col\">Escondite</th>

      <!--
      //Comentado
      <th scope=\"col\">Apellidos</th>
      <th scope=\"col\">Contraseña</th>
      <th scope=\"col\">Coche</th>
      -->

    </tr>
  </thead>
  <tbody>

    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["villanos"] ?? $this->getContext($context, "villanos")));
        foreach ($context['_seq'] as $context["_key"] => $context["villano"]) {
            // line 31
            echo "    <tr>
    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["villano"], "villano", array()), "html", null, true);
            echo "</td>

    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["villano"], "superpoder", array()), "html", null, true);
            echo "</td>

    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["villano"], "escondite", array()), "html", null, true);
            echo "</td>


      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['villano'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
  </tbody>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Villanos/villanos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 41,  73 => 36,  68 => 34,  63 => 32,  60 => 31,  56 => 30,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("



<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->


<table class=\"table table-dark\">
  <thead>
    <tr>
      <th scope=\"col\">Villano</th>
      <th scope=\"col\">Superpoder</th>

      <th scope=\"col\">Escondite</th>

      <!--
      //Comentado
      <th scope=\"col\">Apellidos</th>
      <th scope=\"col\">Contraseña</th>
      <th scope=\"col\">Coche</th>
      -->

    </tr>
  </thead>
  <tbody>

    {% for villano in villanos %}
    <tr>
    <td>{{ villano.villano }}</td>

    <td>{{ villano.superpoder }}</td>

    <td>{{ villano.escondite }}</td>


      </tr>
      {% endfor %}

  </tbody>
</table>", "Villanos/villanos.html.twig", "/Users/Juanjo/batman_project/app/Resources/views/Villanos/villanos.html.twig");
    }
}
