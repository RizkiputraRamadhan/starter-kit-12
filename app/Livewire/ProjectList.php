<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Project;
use Livewire\WithPagination;

class ProjectList extends Component
{
    use WithPagination;

    public $title, $client, $image, $tech, $is_private, $web, $projectId;
    public $isEdit = false;

    // image dan tech diubah ke json real dari dropzone & select2
    protected $rules = [
        'title' => 'required',
        'client' => 'required',
        'image' => 'required|json',
        'tech' => 'required|json',
        'is_private' => 'required|in:Y,N',
        'web' => 'required|url',
    ];

    public function save()
    {
        $this->validate();

        Project::updateOrCreate(
            ['id' => $this->projectId],
            [
                'title' => $this->title,
                'client' => $this->client,
                'image' => $this->image,
                'tech' => $this->tech,
                'is_private' => $this->is_private,
                'web' => $this->web,
            ],
        );

        $this->resetForm();
        session()->flash('message', 'Project berhasil disimpan.');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $this->projectId = $project->id;
        $this->title = $project->title;
        $this->client = $project->client;
        $this->image = implode(',', json_decode($project->image));
        $this->tech = implode(',', json_decode($project->tech));
        $this->is_private = $project->is_private;
        $this->web = $project->web;
        $this->isEdit = true;
    }

    public function delete($id)
    {
        Project::findOrFail($id)->delete();
        session()->flash('message', 'Project berhasil dihapus.');
    }

    public function resetForm()
    {
        $this->reset(['title', 'client', 'image', 'tech', 'is_private', 'web', 'projectId', 'isEdit']);
    }

    public function render()
    {
        return view('livewire.project-list', [
            'projects' => Project::latest()->paginate(5),
        ])->layout('layouts.app');
    }
}
