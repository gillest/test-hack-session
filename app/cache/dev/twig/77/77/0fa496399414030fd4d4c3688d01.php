<?php

/* FOQElasticaBundle:Collector:elastica.html.twig */
class __TwigTemplate_77770fa496399414030fd4d4c3688d01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["icon"] = new Twig_Markup("        <img width=\"16\" height=\"20\" alt=\"elastica\" style=\"border-width: 0; vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAUCAQAAAAua3X8AAAAAXNSR0IArs4c6QAAAAJiS0dEAP+Hj8y/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH2woEDCcGS0MnjgAAAi1JREFUKM9l0UtIVGEYxvHn/c53OqY2ZwJTs5wZDbSNbnJGKnIRJILSIsmWbYKgoIWK2WVpRdFOaJGtWnShRchgdKG0TaQVZZghKdhMGppTOZ0zt3O+722hSNBv++z+D2FdH67hbJFoECep1QjQpByST/uXAVqbe3EdfQG6xUfJsb4ZStnYaX4RPRfihA29cd1R/LLuTUV2E8zyGfvrMSNtNBLQsY0j7lxTCz+03sYeV8JCsLK82Sx69vn1YXHPaLdxnwdooaJT19Q+2pXZLExQBkul0arClJM5IDig9+juwAPaYawGHYskJJlQqcIErW5ZViQ0OMfjg8ukhUFELFjCZMtQM+7HAnwSDM1abud8QgezoeJy0iabJEm5v/KpsFEQKuwHfQ1kr+Rotvm3bUgGg5XjjUbdcPCyEfmkR+jGvHr3vSFd6JqrTq/aCeRmyoaPJKPBya2nqKVHXeK9r94DY9bIxJ9GEyYIWVC+5ENlV3dC5m9Tty4BgCd9dqMLdYdXZKlIJX7MxqcTAGLV0cWm/cDp2jN8nDsTa1Uj9ZGlUDp8CBA+fCgAcijLrnI71rsn1QlYOlZFQkPD8S625Q+6yNwtTLcDAOYzybjOMRZZKCieQ+vNMjhu5uoLf2TjPB72zpfVCAWFkPF8IJuLDY5N4R8FeI7vY3d1/ULdPvwnRHaqtB+QCrC4LRJgyQAUCBoefPws8gNKCJK8wuP6HDTAAAgaPjx48MjP6VHwXxwGAXzUXZKuAAAAAElFTkSuQmCC\"/>
    ", $this->env->getCharset());
        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "         <span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "querycount"), "html", null, true);
        echo "</span>
    ";
        $context["text"] = new Twig_Markup(ob_get_clean(), $this->env->getCharset());
        // line 10
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        // line 14
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/foqelastica/images/elastica.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
    <strong>Elastica</strong>
    <span class=\"count\">
        <span>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "querycount"), "html", null, true);
        echo "</span>
    </span>
</span>
";
    }

    // line 23
    public function block_panel($context, array $blocks = array())
    {
        // line 24
        echo "    <h2>Queries</h2>

    ";
        // line 26
        if ((!$this->getAttribute($this->getContext($context, "collector"), "queries"))) {
            // line 27
            echo "        <p>
            <em>Query logging is disabled.</em>
        <p>
    ";
        } elseif ((!$this->getAttribute($this->getContext($context, "collector"), "querycount"))) {
            // line 31
            echo "        <p>
            <em>No queries.</em>
        </p>
    ";
        } else {
            // line 35
            echo "        <ul class=\"alt\">
            ";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "queries"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 37
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($this->getContext($context, "loop"), "index")), "html", null, true);
                echo "\">
                    <strong>Path</strong>: ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "query"), "path"), "html", null, true);
                echo "<br />
                    <strong>Method</strong>: ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "query"), "method"), "html", null, true);
                echo "
                    <div>
                        <code>";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($this->getContext($context, "query"), "data")), "html", null, true);
                echo "</code>
                    </div>
                    <small>
                        <strong>Time</strong>: ";
                // line 44
                echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getContext($context, "query"), "executionMS") * 1000)), "html", null, true);
                echo " ms
                    </small>
                </li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 48
            echo "        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "FOQElasticaBundle:Collector:elastica.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
