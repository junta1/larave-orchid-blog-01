<?php

namespace App\Behaviors\Many;

use Orchid\Platform\Fields\Field;
use Orchid\Platform\Behaviors\Many;
use Orchid\Platform\Platform\Fields\TD;
use Orchid\Platform\Http\Forms\Posts\BasePostForm;
use Orchid\Platform\Http\Forms\Posts\UploadPostForm;


class AboutTeam extends Many
{

    /**
     * @var string
     */
    public $name = 'AboutTeam';

    /**
     * @var string
     */
    public $slug = 'aboutteam';

    /**
     * Slug url /news/{name}.
     *
     * @var string
     */
    public $slugFields = 'nome';

    /**
     * Rules Validation.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'content.*.nome' => 'required|string',
            'content.*.cargo' => 'required|string',
        ];
    }

    /**
     * HTTP data filters
     *
     * @return array
     */
    public function filters() : array
    {
        return [];
    }

    /**
     * @return array
     */
    public function fields() : array
    {
        return [
            Field::tag('input')
                ->type('text')
                ->name('nome')
                ->max(255)
                ->required()
                ->title('Nome')
                ->help('Qual o nome do Integrante?')
                ->placeholder('Digite o nome do integrante'),

            Field::tag('input')
                ->type('text')
                ->name('cargo')
                ->max(255)
                ->required()
                ->title('Cargo')
                ->help('Qual o nome do cargo?')
                ->placeholder('Digite o cargo do integrante'),
        ];
    }

    /**
     * Grid View for post type.
     */
    public function grid() : array
    {
        return [
            TD::name('nome')->title('Nome'),
            TD::name('cargo')->title('Cargo'),
            TD::name('status')->title('Estado'),
            TD::name('publish_at')->title('Publicado em'),
            TD::name('created_at')->title('Criado em'),
        ];
    }

    /**
     * @return array
     * @throws \Orchid\Platform\Exceptions\TypeException
     */
    public function modules() : array
    {
        return [
            BasePostForm::class,
            UploadPostForm::class,
        ];
    }
}
