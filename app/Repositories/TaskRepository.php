<?php


namespace App\Repositories;


use App\Models\Task;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class TaskRepository implements TaskRepositoryInterface
{

    protected Task $model;

    /**
     * PostRepository constructor.
     *
     * @param Task $post
     */
    public function __construct(Task $task)
    {
        $this->model = $task;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create([
            'name' => $data['name'],
            'description' => $data['description'],
            'user_id' => Auth::user()->id,
            'status_id' => $data['status_id'],
        ]);

    }

    public function update(array $data, $id)
    {
        return $this->find($id)->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function find($id)
    {
        if (null == $post = $this->model->find($id)) {
            throw new ModelNotFoundException("Post not found");
        }

        return $post;
    }

    public function restore($id)
    {
        /** @var Task $task */
        return Task::withTrashed()
            ->where('id', $id)
            ->restore();
    }

    public function force_destroy($id)
    {
        /** @var Task $task */
        return Task::withTrashed()
            ->where('id', $id)
            ->forceDelete();
    }
}
