<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EmployeeExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        //Retrieve the function from the model
        return User::with(['department', 'position', 'manager'])->get();
    }

    protected $index = 0;

    public function map($data): array
    {
        $hire_date = \Carbon\Carbon::parse($data->hire_date)->format('d-F-Y');
        $created_at = \Carbon\Carbon::parse($data->created_at)->format('d-F-Y h:i A');
        $updated_at = \Carbon\Carbon::parse($data->updated_at)->format('d-F-Y h:i A');

        //Employee Category
        if ($data->category_employee == 0) {
            $category_employee = "Full Time";
        } else if ($data->category_employee == 1) {
            $category_employee = "Part Time";
        } else if ($data->category_employee == 2) {
            $category_employee = "Contract";
        } else if ($data->category_employee == 3) {
            $category_employee = "Temporary";
        }

        //Role
        if ($data->is_role == 0) {
            $is_role = "Employee";
        } else if ($data->is_role == 1) {
            $is_role = "HR Admin";
        }

        return [
            ++$this->index,
            $data->id,
            $data->staff_id,
            $data->name,
            $data->last_name,
            $data->email,
            $data->phone_number,
            $data->address,
            $hire_date,
            $data->position->position_name ?? 'N/A',
            $data->manager->name ?? 'N/A',
            $data->department->department_name ?? 'N/A',
            $category_employee,
            $data->annual_leaveDays,
            $data->medical_leaveDays,
            $data->bank_name,
            $data->bank_acc,
            $data->epf_no,
            $data->pcb_no,
            $data->ic_no,
            $is_role,
            $created_at,
            $updated_at,
        ];
    }

    public function headings(): array
    {
        return [
            "No.",
            "Table ID",
            "Employee ID",
            "Name",
            "Last Name",
            "Email",
            "Phone Number",
            "Address",
            "Hire Date",
            "Position",
            "Manager",
            "Department",
            "Employee Category",
            "Balance Annual Leave Days",
            "Balance Medical Leave Days",
            "Bank Name",
            "Bank Account",
            "epf_no",
            "pcb_no",
            "ic_no",
            "Role",
            "Created At",
            "Updated At",
        ];
    }
}
