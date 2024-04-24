<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'project_id' => $this->project_id,
            'milestone_id' => $this->milestone_id,
            'stage_id' => $this->stage_id,
            'owner_id' => $this->owner_id,
            'on_tracking' => $this->on_tracking,
            'task_name' => $this->task_name,
            'description' => $this->description,
            'start_date' => $this->start_date,
            'due_date' => $this->due_date,
            'task_category' => $this->task_category,
            'work_hour_required' => $this->work_hour_required,
            'work_hour' => $this->work_hour,
            'status' => $this->status,
            'priority' => $this->priority,
            'severity' => $this->severity,
            'tag' => $this->tag,
            'assignee_id' => $this->assignee_id,
            'assignee_dates' => $this->assignee_dates,
            'complete' => $this->complete,
            'complete_date' => $this->complete_date
        ];
    }
}
